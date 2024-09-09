<?php
include("../../config.php");

// Verificar si los datos del formulario están presentes
if (!isset($_POST['estudiantes']) || empty($_POST['estudiantes'])) {
    session_start();
    $_SESSION['mensaje'] = "No se recibieron datos de diplomas.";
    $_SESSION['icono'] = "error";
    ?><script>window.history.back();</script><?php
    exit();
}

// Obtener datos del formulario
$grado_id = $_POST['grado_id'];
$estudiantes = $_POST['estudiantes'];
$niveles = $_POST['nivel'];
$files = $_FILES['files'];

// Directorio para almacenar archivos PDF
$upload_dir = __DIR__ . '/../../../public/pdf/diplomas/';

// Preparar la sentencia SQL una vez
$sentencia = $pdo->prepare('
    INSERT INTO diplomas (grado_id, estudiante_id, nivel, archivo, fyh_creacion, estado)
    VALUES (:grado_id, :estudiante_id, :nivel, :archivo, :fyh_creacion, :estado)
');

// Comenzar transacción
$pdo->beginTransaction();

try {
    foreach ($estudiantes as $index => $id_estudiante) {
        $nivel = $niveles[$index];
        $file_name = '';

        // Manejar la carga del archivo
        if (isset($files['name'][$index]) && $files['name'][$index] != '') {
            $file_tmp = $files['tmp_name'][$index];
            $file_name = time() . '_' . basename($files['name'][$index]);
            $file_path = $upload_dir . $file_name;

            if (!move_uploaded_file($file_tmp, $file_path)) {
                throw new Exception("Error al subir el archivo: $file_name");
            }
        }

        // Asignar parámetros a la sentencia preparada
        $sentencia->bindParam(':grado_id', $grado_id);
        $sentencia->bindParam(':estudiante_id', $id_estudiante);
        $sentencia->bindParam(':nivel', $nivel);
        $sentencia->bindParam(':archivo', $file_name);
        $sentencia->bindParam(':fyh_creacion', $fecha_actual); // Usar la variable fecha actual
        $sentencia->bindParam(':estado', $estado_de_registro); // Usar la variable estado de registro

        // Ejecutar la sentencia
        if (!$sentencia->execute()) {
            throw new Exception("No se registraron todas los diplomas");
        }
    }

    // Confirmar la transacción
    $pdo->commit();
    session_start();
    $_SESSION['mensaje'] = "Se registraron todos los diplomas";
    $_SESSION['icono'] = "success";
} catch (Exception $e) {
    // Deshacer la transacción en caso de error
    $pdo->rollBack();
    session_start();
    $_SESSION['mensaje'] = "Error: " . $e->getMessage();
    $_SESSION['icono'] = "error";
}

// Redirigir al usuario
?><script>window.history.back();</script><?php
?>

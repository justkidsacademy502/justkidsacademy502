<?php
$id_pago = $_GET['id'];
$id_estudiante = $_GET['id_estudiante'];
$id_config_institucion = $_GET['id'];
include('../../app/config.php');
require_once('../../public/TCPDF-main/tcpdf.php'); // Ajusta la ruta si es necesario

// Obtener datos del estudiante
include('../../app/controllers/estudiantes/datos_del_estudiante.php'); 

// Consulta para obtener datos del pago específico
$sql_pagos = "SELECT * FROM pagos WHERE estado = '1' AND estudiante_id = ? AND id_pago = ?";
$query_pagos = $pdo->prepare($sql_pagos);
$query_pagos->execute([$id_estudiante, $id_pago]);
$pagos = $query_pagos->fetchAll(PDO::FETCH_ASSOC);

// Verifica si el pago fue encontrado
if (empty($pagos)) {
    die('No se encontraron datos para el pago solicitado.');
}

// Obtener datos de la institución
include('../../app/controllers/configuraciones/institucion/datos_institucion.php');
foreach ($instituciones as $institucione) {
    $nombre_institucion = $institucione['nombre_institucion'];
    $telefono = $institucione['telefono'];
    $correo = $institucione['correo'];
    $logo = $institucione['logo'];
}

// Datos del pago (usamos el primer elemento de $pagos)
$pago = $pagos[0];
$mes_pagado = $pago['mes_pagado'];
$fecha_pagado = $pago['fecha_pagado'];
$descuento_pago = $pago['descuento_pago'];
$monto_pagado = $pago['monto_pagado'];
$proximo_pago = $pago['proximo_pago'];
$no_transaccion = $pago['no_transaccion'];
$mensualidad_precio = $pago['mensualidad_precio'];

// Crear instancia de TCPDF
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, array(216,270), true, 'UTF-8', false);

// Configuración del documento
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor(APP_NAME);
$pdf->SetTitle(APP_NAME);
$pdf->SetSubject('Constancia de Mensualidad');
$pdf->SetKeywords('TCPDF, PDF, constancia, mensualidad');

// Configurar márgenes
$pdf->SetMargins(15, 25, 15); // Margen izquierdo, superior, derecho
$pdf->setPrintHeader(false); // Desactiva el encabezado

// Añadir página
$pdf->AddPage();

// Ruta de la imagen de fondo
$backgroundImage = '../../public/img/fondo.jpg';
$pdf->Image($backgroundImage, 29, 25, 220, 297, '', '', '', true, 300, '', false, false, 0);

// Obtener dimensiones de la página
$pageWidth = $pdf->getPageWidth(); // Ancho de la página
$pageHeight = $pdf->getPageHeight(); // Alto de la página

// Definir dimensiones del rectángulo
$rectWidth = $pageWidth; // Ancho del rectángulo
$rectHeight = 90; // Altura del rectángulo

// Calcular coordenadas para centrar el rectángulo verticalmente
$x = 0; // X se ajusta para dejar un margen de 15 mm a ambos lados
$y = ($pageHeight - $rectHeight) / 1.9; // Centrar verticalmente

// Establecer color de relleno y transparencia
$pdf->SetFillColor(128, 0, 128); // Morado RGB
$pdf->SetAlpha(0.2); // Ajustar la transparencia

// Dibujar un rectángulo con el color de relleno
$pdf->Rect($x, $y, $rectWidth, $rectHeight, 'F'); // x, y, ancho, alto, tipo de relleno

// Restablecer la transparencia a opaco para el resto del contenido
$pdf->SetAlpha(1); // Restaurar opacidad completa

// Logo en la esquina superior izquierda
$logoPath = '../../public/img/logo_academia.jpg';
$pdf->Image($logoPath, 15, 10, 25, '', '', '', 'T', true, 300, '', false, false, 0);

// Información de contacto en la esquina superior derecha
$pdf->SetXY(150, 16); // Coordenadas (x, y)
$pdf->SetFont('Helvetica', '', 10);
$pdf->Cell(0, 0, 'Tel: +502 5513-6495' , 0, 1, 'R');
$pdf->Cell(0, 0, 'Email: justkidsacademy502@gmail.com', 0, 1, 'R');

// Establecer fuente
$pdf->SetFont('Helvetica', '', 12);

// Contenido del PDF
$pdf->SetXY(15, 50); // Coordenadas (x, y) para el texto principal
$html = '
<h1>Datos del Estudiante:</h1>
<b>Estudiante:</b> '.$nombres.' '.$apellidos.'<br>
<b>Telefono:</b> '.$celular_ppff.'<br>
<b>Nivel:</b> '.$nivel.'

<br><br><br><br><br><br>

    <table width="130%">
        <thead>
            <tr><br>
                <th><b>Nro. Transacción</b></th>
                <th><b>Descripción</b></th>
                <th><b>Precio</b></th>
            </tr>
        </thead>
        <tbody>
            <tr><br>
                <td style="font-weight: normal;">'.$no_transaccion.'</td>
                <td style="font-weight: normal;">Mensualidad</td>
                <td style="font-weight: normal;">'.$mensualidad_precio.'</td>
            </tr>
            <tr><br>
                <td style="font-weight: normal;"></td>
                <td style="font-weight: normal;">Descuento</td>
                <td style="font-weight: normal;">'.$descuento_pago.'</td>
            </tr>
            <tr><br>
                <td></td>
                <td style="font-weight: normal;">Monto Deposito</td>
                <td style="font-weight: normal;">'.$monto_pagado.'</td>
            </tr>
            <tr><br>
                <td></td>
                <td><b>Total</b></td>
                <td>'.$monto_pagado.'</td>
            </tr>
        </tbody>
    </table>

<br><br><br><br><br><br><br><br><br><br>

<h3>Detalles del Pago</h3>
<b>Pais:</b> Guatemala <br>
<b>Mes pagado:</b> '.$mes_pagado.' <br>
<b>Fecha y Hora Emisión:</b> '.$fecha_pagado.'<br>
<b>Moneda:</b> GTQ 
';

// Imprimir texto en el PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Cerrar y enviar PDF
$pdf->Output('Constancia-Mensualidad-'.$fecha_pagado.'.pdf', 'I'); // 'I' para visualizar en el navegador
?>

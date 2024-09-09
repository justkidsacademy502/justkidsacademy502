<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 * @group header
 * @group footer
 * @group page
 * @group pdf
 */

// Include the main TCPDF library (search for installation path).
$id_estudiante = $_GET['id'];
include('../../app/config.php');
require_once('../../public/TCPDF-main/tcpdf.php');
include('../../app/controllers/configuraciones/institucion/listado_de_instituciones.php');
include('../../app/controllers/estudiantes/datos_del_estudiante.php');


//Traendo datos de la institución

foreach ($instituciones as $institucione){
    $nombre_institucion = $institucione['nombre_institucion'];
    $telefono = $institucione['telefono'];
    $correo = $institucione['correo'];
    $logo = $institucione['logo'];
}



// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, array(216,280), true, 'UTF-8', false);

// set document information
$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor(APP_NAME);
$pdf->setTitle(APP_NAME);
$pdf->setSubject(APP_NAME);
$pdf->setKeywords(APP_NAME);

// set default header data
$pdf->setHeaderData('../public/img/logo_academia.jpg', PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->setMargins(10, 10, 10);
$pdf->setHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);

$pdf->setPrintHeader(false);

// set auto page breaks
$pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('Helvetica', '', 7);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();


// Set some content to print
$html = '
<p>
<div style="display: flex;
align-items: center;
justify-content: center;">
<div style="text-align:center"><img src="../../public/img/logo_academia.jpg" alt="" width="100px"></div>
<h1 style="text-align:center"> TERMINOS Y CONDICIONES CURSO DE JUST KIDS ACADEMY </h1> <br><br>
            
</div>
  

Yo <b>'.$nombres_apellidos_ppff.'</b> con número de DPI <b>'.$dpi_ppf.'</b> responsable del alumno/a <b>'.$nombres.' '.$apellidos.'</b> hago cumplir la siguiente garantía de aprendizaje y me comprometo a lo siguiente: <br><br>
        
<b>Just Kids Academy</b> es un programa de enseñanza del idioma Inglés dirigido a niños, niñas y adolescentes entre las edades de 4 a 17 años, desglosado de la siguiente manera: <br><br>

<b>Starters:</b> (no indispensable poder leer o escribir) <br>
<b>Explorers:</b> (indispensable leer y escribir en un 85%) <br>
<b>Masters:</b> (indispensable leer y escribir en un 85%) <br><br>

<h4><b>REGLAMENTO INTERNO DE CLASES:</b></h4> <br>
<b>1.</b> Es responsabilidad de él o la estudiante estar siempre a tiempo a la hora de inicio de la clase, él alumno puede ingresar a su clase hasta 5 minutos antes. <br>
<b>2.</b> Fomentamos el trabajo en equipo y la unión entre las personas. Recuerda siempre respetar la opinión y participación de tus compañeros y compañeras. Es importante acatar las indicaciones del coach al momento de
solicitar tu participación. Por ser un curso altamente interactivo en la participación es de carácter prioritario, es necesario que el estudiante participe al momento que el coach lo indique. El no participar puede ser motivo
para no continuar con el curso. <br>
<b>3.</b> Evita utilizar vocabulario con palabras soeces hacia tus compañeros y compañeras y coach de la clase. Algunas personas pueden considerar dicho vocabulario ofensivo o inapropiado. <br>
<b>4.</b> En clases virtuales esta prohibido ingerir alimentos. <br>
<b>5.</b> Para clases virtuales es necesario activar video y audio siempre que tu coach lo indique para poder realizar las actividades asignadas dentro de la clase. Esto permite a tu coach poder ayudarte de una
manera más completa al momento de supervisar los ejercicios. <br>
<b>6.</b> Recuerda que una vez al mes puedes invitar a un amigo a tu clase (20 minutos). Es muy importante que antes de hacerlo lo notifiques con nuestro personal de servicio al cliente con 24 horas de anticipación para
previa autorización. <br>
<b>7.</b> Respetar los horarios de entrada y salida de las clases. Seguir las indicaciones con respecto a los horarios, ayuda a él o la estudiante a mantener el conocimiento en secuencia de los diferentes temas. <br>
<b>8.</b> Direct English recomienda mantener un instructor asignado a una clase por un periodo de 2 meses como mínimo pero en caso que la institución lo determine por cualquiera que fuera la causa y la institución lo
considere de tipo vital la clase puede tener un cambio de instructor independientemente del tiempo que tenga iniciado la clase. <br>
<b>9.</b> En caso de que una sala de clase de Just Kids academy llegue a un mínimo de 10 a 8 estudiantes en su modalidad de clases online, Direct English se encuentra en la facultad de considerar la unión de dicho
sala de clase con otra sala que cuente con un mismo número mínimo en modalidad virtual y si lo considera de carácter vital ambas clases serán unidas. <br>
<b>10.</b> Dinámicas de las clases indicadas por el coach: Prácticas en pareja, prácticas grupales, exposiciones, juegos de rol y dramatizaciones. Todas estas dinámicas tienen el objetivo de que
el estudiante pueda mejorar su confianza y fluidez en el manejo del idioma. Métricas de las clases: Son los objetivos a cumplir en cada actividad dirigida o solicitada por el coach y que
están compuestas por un tiempo designado según el objetivo a alcanzar de acuerdo al plan de estudio por nivel. <br>
<b>11.</b> Si él o la estudiante desea una clase demostrativa en una modalidad diferente a la que se encuentra inscrito se le puede brindar, sin embargo tendrá un costo adicional y el valor es
estipulado en dólares (O su equivalente a la moneda local según el país del él o la estudiante). <br>
<b>12.</b> No se permite el uso de aparatos que afecte la concentración de el/la estudiante dentro de la sala de clases. <br><br>

<b>SOBRE CONDUCTAS INADECUADAS DENTRO DE CLASE: </b><br><br>

Just Kids academy está en el derecho de dirigirse a los padres de familia o directamente al alumno cuando su conducta está siendo inadecuada realizando un primer llamado de atención, si él o la alumna no cambia su
conducta ésto conlleva a una expulsión y Just Kids academy se reservará el derecho de admisión. <br><br>

<b>SOBRE PERMISOS PARA NO ASISTIR A CLASES:</b> <br><br>

<b>1.</b> Los permisos para no asistir a clases se podrán realizar a través de nuestra plataforma virtual o por medio de WhatsApp, puede ser solicitado por causa de enfermedad, motivos laborales o por estudios universitarios. Él o la estudiante
puede solicitar el número de permisos que desee en el mes. <br>
<b>2.</b> Él o la estudiante está de acuerdo y conocedor que los permisos para faltar a clases pueden afectar los resultados del curso ya que se interrumpe la secuencia del aprendizaje de la temáticas vistas en clases. <br>
<b>3.</b> Los días no asistidos a clases por motivos de permisos o de cualquier índole no serán descontados de la mensualidad de él o la estudiante. <br>
<b>4.</b> Just Kids Academy acepta los permisos solicitados por él o la estudiante pero no se encuentra en la obligación de brindar la reposición de clases por dichos permisos solicitados. <br>
<b>5.</b> Si él o la estudiante desea reponer su clase esta tiene un costo adicional y el valor es estipulado en dólares (O su equivalente a la moneda local según el país de el o la estudiante), el valor debe de ser consultado con
el equipo de servicio al cliente. <br><br>

<b>SOBRE REPOSICIONES DE CLASES: </b><br><br>

Si él o la estudiante falta a una clase Just Kids Academy no está en la responsabilidad de reponer dicha clase o realizar ningún tipo de devolución monetaria por dicha falta. <br> <br>
Si él o la estudiante desea realizar la reposición de su clase puede hacerlo por un costo adicional, el costo del día clase para cursos semanales es de Q40 y el costo de reposición de clase para fines de semana es de
Q100. La programación de la clase de reposición debe solicitarse con 24 horas de anticipación ya que solamente se puede reponer en el mismo día que será la ausencia, tomando en cuenta que estará sujeto a la
disponibilidad de cupos y tema en que se encuentre el otro grupo de clase. <br><br>
En caso que él o la estudiante no pueda asistir a clases Just Kids Academy recomienda a él o la estudiante el poder repasar los temas vistos desde las presentaciones o grabaciones de las clases desde la plataforma académica. <br><br>

<b>SOBRE EL GRUPO DE WHATSAPP DE LA CLASE: </b><br><br>
Al momento que el o la estudiante realiza su inscripción, solicita un cambio de horario o es reactivado nuevamente en nuestra institución Just Kids Academy ingresa a el o la estudiante a un grupo de whatsapp donde el
instructor académico designado estará compartiendo información referente al plan académico de el o la estudiante. El agregar a un o una estudiante al grupo de whatsapp de la clase es un proceso que puede llevar de 12
a 24 horas. <br><br>

<b>SOBRE LA ENTREGA DE CERTIFICADO AL FINALIZAR:</b> <br><br>
Si al finalizar el curso él o la estudiante finaliza con el porcentaje estipulado, Just Kids Academy entregará el certificado de la institución haciendo mención que él o la estudiante ha finalizado el curso con éxito. <br><br>
Para poder recibir el certificado de finalización del curso, él o la estudiante debe de cumplir tres meses como mínimo estudiando continuamente en la academia. <br><br>
Para otros países en los diferentes continentes Just Kids Academy hace entrega de su certificado de finalización por correspondencia y dependiendo de la distancia puede tardar hasta 90 días. <br><br>

Él o la estudiante puede reclamar su certificado de finalización en el transcurso de 3 meses desde su deserción de manera gratuita, si se desea adquirir el certificado de finalización después de pasados los 3 meses este
tendrá un costo adicional estipulado por Just Kids Academy. <br><br>

<b>SOBRE DIPLOMAS VIRTUALES POR NIVEL: </b><br><br>

En el portal académico de Just Kids Academy él o la estudiante podrá obtener los diplomas virtuales por cada nivel finalizado con el porcentaje de acuerdo en el pensum publicado en nuestro portal académico.
Si él o la estudiante en el nivel inicial alcanzare en su ponderación un porcentaje que le permita avanzar hacia un nivel mayor de lo estipulado en el pensum académico el o la estudiante tiene Derecho a obtener todos los
diplomas virtuales anteriores a su nuevo nivel <br><br>

<b>VALOR DE LA MENSUALIDAD:</b> <br><br>
El valor del pago mensual del curso siempre podrá ser visualizado por el o la estudiante desde el portal académico, el estudiante contará con un usuario y contraseña para poder ingresar desde el momento de la
inscripción. <br>
Si él o la estudiante no recordaré el valor de su cuota puede ser visualizada desde el portal académico. <br>
Se recomienda a el o la estudiante que antes de realizar su pago por transferencia bancaria o realice el depósito de manera presencial visitando una agencia bancaria autorizada por Just Kids Academy pueda visualizar el
valor de su cuota. <br><br>

<b>SOBRE FECHA DE PAGO DE MENSUALIDAD:</b> <br><br>
Sobre la mensualidad de pago por módulo: Los pagos por módulo de curso se realizan de forma mensual, y la fecha de pago se realiza todos los meses en el mismo día del calendario que la fecha que dio inicio el
curso. <br>
<b>Ejemplo:</b><br>
Si su primer día de clase es el 02 de Enero, sería el 02 de Febrero la fecha de su próximo pago <br><br>
-Él o la estudiante tiene dos días "de gracia" para realizar su pago sin ningún cargo moratorio, pasada la fecha el cargo de mora a cancelar es de Q30. (O su equivalente a la moneda local según el país del estudiante). <br>
-Él o la estudiante no puede realizar evaluación mientras no se encuentre solvente con su mensualidad. <br>
-Después de que los dos días "de gracia" hayan pasado él o la estudiante sólo mantendrá el acceso a los módulos de apoyo. No tendrá acceso a sus clases hasta que haya realizado su
pago mensual y en caso él o la alumna se de baja en el curso y haya asistido de manera online después de su fecha de pago quedará pendiente con esos días que tendrán que ser cancelados con el valor del
día clase que Just Kids Academy establezca, el sistema de Just Kids Academy realiza automáticamente la deserción de él o la estudiante en su cuarto día después de vencida su mensualidad. <br><br>
-El conteo de días de clases es de manera ininterrumpida, en caso de días de asueto no son descontados del periodo del estudiante. <br><br>

<b>SOBRE RECORDATORIO DE PAGO:</b> <br><br>
Just Kids Academy realiza recordatorios de fecha de pago por medio de mensajería virtual en clases de modalidad online desde 3 días antes de la fecha de pago o por medio de llamada. También se realizan recordatorios de pago cuando la fecha se encuentra vencida, pero la realización de dichos
recordatorios de pago no es obligatoria de Just Kids Academy, sin embargo la institución lo realiza como un valor agregado y es deber del estudiante o la estudiante comunicarse con nuestro personal para actualizar sus
números de contacto, si éstos cambiaran en algún momento. <br><br>

<b>SOBRE MODALIDADES DE PAGO DE MENSUALIDAD:</b> <br><br>
En este caso tenemos 2 modalidades para realizar el pago de su cuota: <br><br>
 1- Puede realizar el pago de manera presencial visitando personalmente una agencia bancaria. <br>
2- Si cuenta con una banca en Línea puede realizar una transferencia. <br><br>
Recuerde que puede consultar con Atención al Cliente los números de cuenta para cancelar con la modalidad que mejor le convenga. <br><br>

<b>SOBRE PAGOS DE MANERA VIRTUAL:</b><br><br>

Si él o la estudiante realizará el pago de su mensualidad por medio de transferencia bancaria o visitará una agencia bancaria para realizar el depósito del
efectivo en una cuenta autorizada por Just Kids Academy, el o la estudiante debe de enviar una o las fotografías o capturas de pantalla del comprobante de pago que sean necesarias para su validación <br><br>
Al realizar un pago por transferencia bancaria o depósito en cuenta bancaria es deber de él o la estudiante que al momento de enviar la o las fotografías o capturas de pantalla del comprobante de pago, él o la estudiante
debe de comprobar que la o las fotografías o capturas de pantalla muestran de manera legible en el comprobante de pago las siguiente información: Monto de la transacción, número de referencia o número del depósito,
cuenta del remitente(el que recibe en este caso Just Kids Academy) y fecha en que fue realizada la operación. <br><br>
El no cumplimiento del envío de la o las fotografías o capturas de pantalla de la manera correcta puede retardar la emisión de la factura o constancia Just Kids Academy está en el deber de solicitar nuevamente el envío de lo solicitado
de la manera correcta como se estipula en el párrafo anterior. <br><br>

<b>SOBRE PAGOS DE MENSUALIDAD INCOMPLETOS: </b><br><br>

Si él o la estudiante al momento de cancelar su cuota mensual por medio de transferencia bancaria o realizando el depósito directamente en una agencia de la misma enviase la foto de su comprobante de pago a nuestro
personal de atención al cliente virtual y al verificar el comprobante de pago nuestro personal de servicio al cliente detecta que el valor que refleja es un valor menor a la cuota de la mensualidad estipulada Just Kids Academy
llevará a cabo la facturación por dicha cantidad aunque no coincida con el valor total de la mensualidad establecida y de acuerdo a la cantidad faltante se hará el descuento de días respectivo según el valor establecido en
sus política sobre valor del día clase por pago incompleto. <br><br>

<b>SOBRE PAGOS DE MENSUALIDAD QUE EXCEDAN EL VALOR DE LA CUOTA:</b> <br><br>

Si él o la estudiante al momento de cancelar su cuota mensual por medio de transferencia bancaria o realizando el depósito directamente en una agencia de la misma enviase la foto de su comprobante de pago a nuestro
personal de atención al cliente virtual y al verificar el comprobante de pago nuestro personal de servicio al cliente detecta que el valor que refleja es un valor mayor a la cuota de la mensualidad estipulada Just Kids Academy
llevará a cabo la facturación por dicha cantidad aunque no coincida con el valor de la mensualidad establecida y de acuerdo a la cantidad del excedente Just Kids Academy le dará días adicionales de acuerdo a la cantidad
del excedente y según el valor establecido en sus política sobre valor del día clase por pago con excedente. Si la cantidad del excedente fuese menor al valor del día de clase, Just Kids Academy tomará el excedente como
parte de su mensualidad. <br><br>

<b>SOBRE CAMBIO DE AUMENTO O REDUCCIONES EN LA MENSUALIDAD: </b><br><br>

Just Kids Academy está autorizada para realizar modificaciones en el valor de la cuota mensual, la modificación puede ser aplicada en reducciones o aumentos de la misma, las reducciones o aumento de cuota es un proceso
que será determinado por la dirección administrativa de Just Kids Academy. <br><br>
Es deber de Just Kids Academy notificar a los y las estudiantes con 15 días de anticipación sobre la reducción o aumento de cuota. <br><br>
Just Kids Academy basa su cambios del valor de la cuota de acuerdo a las necesidades de la operación en la aplicación de mejoras institucionales donde la población estudiantil es beneficiada, también puede llevar a cabo un
aumento en el valor de la cuota para poder cubrir sus obligaciones financieras, el aumento de cuota también puede obedecer a la solicitud requerida por los socios <br>
Si un alumno o alumna se da de baja del curso y él o la estudiante decide regresar a sus clases el valor de su cuota cambia de acuerdo a la promoción de mes vigente <br><br>
        
<b>SOBRE EL CONGELAMIENTO DE LA MENSUALIDAD:</b> <br><br>

-Los congelamientos de mensualidad solo aplican en caso de accidente o enfermedad que puedan incapacitar al estudiante por un periodo de 15 días o más. <br>
-Él o la estudiante podrá congelar su mensualidad mientras confirme con una constancia médica emitida en un documento formal y avalada por un médico u organización de la salud como clínicas médicas privadas o
públicas y hospitales privados o nacionales. <br>
-Él o la estudiante podrá congelar su mensualidad mientras confirme con una constancia justificada. <br>
-El congelamiento debe ser un proceso personal, es decir, él o la estudiante que desea congelar su mensualidad debe hacer el proceso con la ejecutiva de servicio al cliente.
-Se puede congelar la mensualidad hasta un máximo de 30 días calendario y cuando no exceda más del 50% del curso recibido. <br>
-No se puede congelar menos del 50% del curso, es decir, como mínimo se puede congelar dos semanas de clase, no menos. <br>
-Para aplicar el congelamiento en la mensualidad es necesario que el o la estudiante lo notifique con 3 días de anticipación. En caso de que el estudiante sufra un accidente o enfermedad que le impida notificar su
congelamiento, el estudiante puede presentar la documentación respectiva para poder recuperar sus días de clases perdidas como si hubieran estado congelados, después de recuperarse de su incapacidad. <br>
-Él o la estudiante puede cambiar su horario según su conveniencia siempre y cuando tenga el mismo nivel del que cursa en su momento. <br>
En caso de que se realice un proceso sustituto o devolución por las causas mencionadas anteriormente es necesario que el cliente o él o la estudiante presente su comprobante de pago para hacer efectivo el canje, de lo
contrario no se podrá realizar dicho proceso. En el caso de realizar devolución se hará un descuento por gastos administrativos estipulados por la empresa. <br><br>
      
<b>SOBRE MODIFICACIONES EN LOS TÉRMINOS Y CONDICIONES.</b> <br><br>

El responsable es conocedor y está en mutuo acuerdo con Just Kids Academy que sobre los términos y condiciones leídos en este documento están sujetos a las modificaciones o actualizaciones del mismo que serán
publicadas y estarán de manera fija en nuestro portal académico donde podrá encontrar los términos y condiciones para clases presenciales y virtuales para todas las edades. <br><br>

<b>SOBRE RECOPILACIÓN DE DATOS PERSONALES</b> <br><br>

Just Kids Academy almacena los datos personales del alumno brindados al momento de inscribirse con nosotros en nuestro sistema para procesos administrativos, él o la alumna puede solicitar los datos almacenados en
cualquier momento ya que se mantendrán en nuestro sistema para obtener un respaldo e historial de clientes. <br><br>

<b>CONSENTIMIENTO PARA TOMA DE FOTOGRAFÍAS Y VIDEOS DURANTE ACTIVIDADES ACADEMICAS:</b> <br><br>

Al inscribir a su hijo/a en nuestros cursos de inglés para niños, usted, como padre/madre o tutor legal, reconoce y acepta los siguientes términos y condiciones relacionados con la toma de contenido multimedia durante
actividades académicas para la publicación en redes sociales. <br><br>

<b>CONSENTIMIENTO PARA FOTOGRAFÍAS Y VIDEOS: </b><br><br>
Usted reconoce y acepta que durante festividades escolares online, celebraciones culturales online, u otras actividades similares, nuestro personal puede tomar fotografías y videos de su hijo/a participando en
dichos eventos con el propósito de documentar y promover las actividades de la academia. <br><br>

<b>CONFIDENCIALIDAD DE LA INFORMACIÓN PERSONAL:</b> <br><br>
Nos comprometemos a proteger la privacidad y la seguridad de su hijo/a. No compartiremos detalles personales identificables de los estudiantes en las publicaciones de fotografías y videos, a menos que contemos con
su consentimiento explícito por escrito. <br><br>

<b>OPCIÓN DE EXCLUSIÓN:</b> <br><br>

Si tiene objeciones específicas sobre la publicación de imágenes o videos de su hijo/a durante actividades académicas, le pedimos que nos lo comunique por escrito con anticipación. Respetaremos su solicitud y nos
aseguraremos de no incluir a su hijo/a en las publicaciones. <br><br>

<b>RENUNCIA DE RESPONSABILIDAD: </b><br><br>

Usted libera a Just Kids Academy, su personal y afiliados de cualquier responsabilidad relacionada con el uso y publicación de fotografías y videos de su hijo/a durante actividades académicas, de acuerdo con los
términos y condiciones establecidos en este documento. <br><br>

Al inscribir a su hijo/a en Just Kids Academy usted reconoce haber leído, comprendido y aceptado estos términos y condiciones sobre el uso de fotografías, videos y publicación en redes sociales. <br><br>
Nos reservamos el derecho de admisión y no se realizan devoluciones: <br>
Just Kids Academy se reserva el derecho de admisión sin compromiso de reembolso o devolución alguna de la inversión realizada de él o la estudiante. <br>
Con lo anteriormente leído me doy por satisfecho y estoy de acuerdo con los términos y condiciones de Just Kids Academy. 
</p>
';

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('JustKidsAcademy.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+

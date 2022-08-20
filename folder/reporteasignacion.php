<?php
//Incluimos el fichero de conexion
Class dbConexion{
/* Variables de conexion */
var $dbhost = "localhost";
var $username = "root";
var $password = "";
var $dbname = "rp_v2";
var $conn;
//Funcion de conexion MySQL
function getConexion() {
$con = mysqli_connect($this->dbhost, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());

/* Revisamos la conexion */
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
} else {
$this->conn = $con;
}
return $this->conn;
}
}
//Incluimos la libreria PDF
include_once('../assets/fpdf/fpdf.php');

class PDF extends FPDF
{
// Funcion encargado de realizar el encabezado
function Header()
{
// Logo
$this->Image('../assets/img/santarosa.png',10,-1,30);
$this->SetFont('Arial','B',13);
// Move to the right
$this->Cell(80);
// Title
$this->Cell(95,10,'Lista de eventos',1,0,'C');
// Line break
$this->Ln(20);
}
// Funcion pie de pagina
function Footer()
{
// Position at 1.5 cm from bottom
$this->SetY(-15);
// Arial italic 8
$this->SetFont('Arial','I',8);
// Page number
$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$db = new dbConexion();
$connString = $db->getConexion();
$display_heading = array('codasig'=>'#', 'tituloa'=> 'Evento', 'fechaini'=> 'Fecha','horaini'=> 'Hora de inicio','fecha_limite'=> 'Hora de finalización');

$result = mysqli_query($connString, "SELECT asignacion.codasig, asignacion.tituloa, asignacion.fechaini, asignacion.horaini, asignacion.fecha_limite,docente.nomprof,clase.nomclase, seccion.nomsec, asignacion.archiv, asignacion.fecha_create, asignacion.estado FROM asignacion INNER JOIN docente ON asignacion.coddoce = docente.coddoce INNER JOIN clase ON asignacion.codclase = clase.codclase  INNER JOIN seccion ON asignacion.codsec = seccion.codsec") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM asignacion");

$pdf = new PDF('L','mm','A4');
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12, 'UTF-8');
// Declaramos el ancho de las columnas
$w = array(10,60,30,30,30,45,41,20);
//Declaramos el encabezado de la tabla
$pdf->Cell(10,12,'#',1);
$pdf->Cell(60,12,'EVENTO',1);
$pdf->Cell(30,12,'FECHA',1);
$pdf->Cell(30,12,'HORA INICIAL',1);
$pdf->Cell(30,12,'HORA FINAL',1);
$pdf->Cell(45,12,'INSTRUCTOR',1);
$pdf->Cell(41,12,'TEMA',1);
$pdf->Cell(20,12,'SALON',1);


$pdf->Ln();
$pdf->SetFont('Arial','',12, 'UTF-8');
//Mostramos el contenido de la tabla
foreach($result as $row)
{
$pdf->Cell($w[0],8,$row['codasig'],1);
$pdf->Cell($w[1],8,utf8_decode($row['tituloa']),1);
$pdf->Cell($w[2],8,utf8_decode($row['fechaini']),1);
$pdf->Cell($w[2],8,utf8_decode($row['horaini']),1);
$pdf->Cell($w[2],8,utf8_decode($row['fecha_limite']),1);
$pdf->Cell($w[5],8,utf8_decode($row['nomprof']),1);
$pdf->Cell($w[6],8,utf8_decode($row['nomclase']),1);
$pdf->Cell($w[7],8,utf8_decode($row['nomsec']),1);



$pdf->Ln();
}
$pdf->Output('eventos.pdf', 'D');
?>
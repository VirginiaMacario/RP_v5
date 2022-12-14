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
$this->Cell(95,10,'Lista de temas',1,0,'C');
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
$display_heading = array('codclase'=>'#', 'nomclase'=> 'Tema', 'info'=> 'Información');

$result = mysqli_query($connString, "SELECT clase.codclase, clase.nomclase, docente.nomprof,grado.nomgra,anoaca.nomano,clase.tipo,clase.info,clase.fecha_create  FROM clase INNER JOIN docente ON clase.coddoce = docente.coddoce INNER JOIN grado ON clase.codgra = grado.codgra INNER JOIN anoaca ON clase.codano=anoaca.codano") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM clase");

$pdf = new PDF('L','mm','A4');
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12, 'UTF-8');
// Declaramos el ancho de las columnas
$w = array(10,70,150/*,50,40,45,41*/);
//Declaramos el encabezado de la tabla
$pdf->Cell(10,12,'#',1);
$pdf->Cell(70,12,'TEMA',1);
$pdf->Cell(150,12,'INFORMACION',1);
/*$pdf->Cell(50,12,'HORA INICIAL',1);
$pdf->Cell(40,12,'HORA FINAL',1);
$pdf->Cell(45,12,'TEMA',1);
$pdf->Cell(41,12,'SALON',1);
$pdf->Cell(41,12,'INSTRUCTOR',1);*/


$pdf->Ln();
$pdf->SetFont('Arial','',12, 'UTF-8');
//Mostramos el contenido de la tabla
foreach($result as $row)
{
$pdf->Cell($w[0],6,$row['codclase'],1);
$pdf->Cell($w[1],6,utf8_decode($row['nomclase']),1);
$pdf->Cell($w[2],6,utf8_decode($row['info']),1);
/*$pdf->Cell($w[3],6,utf8_decode($row['horaini']),1);
$pdf->Cell($w[4],6,utf8_decode($row['fecha_limite']),1);
$pdf->Cell($w[5],6,utf8_decode($row['coddoce']),1);
$pdf->Cell($w[6],6,utf8_decode($row['codclase']),1);
$pdf->Cell($w[6],6,utf8_decode($row['codsec']),1);*/


$pdf->Ln();
}
$pdf->Output('temas.pdf', 'D');
?>
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
$this->Cell(95,10,'Lista de instructores',1,0,'C');
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
$display_heading = array('coddoce'=>'#', 'nomprof'=> 'Nombre', 'apeprfo'=> 'Apellido','email'=> 'Email','telef'=> 'Telefono');

$result = mysqli_query($connString, "SELECT docente.coddoce, docente.dnido, docente.nomprof, docente.apeprof, docente.fech_naci, docente.sex, docente.email, docente.telef, docente.direc,docente.dia_ing, docente.foto, docente.nomusu, docente.passw,  docente.estado, docente.role,docente.fecha_registro FROM docente") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM docente");

$pdf = new PDF('L','mm','A4');
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12, 'UTF-8');
// Declaramos el ancho de las columnas
$w = array(10,50,50,50,40,45,41);
//Declaramos el encabezado de la tabla
$pdf->Cell(10,12,'#',1);
$pdf->Cell(50,12,'NOMBRE',1);
$pdf->Cell(50,12,'APELLIDO',1);
$pdf->Cell(50,12,'EMAIL',1);
$pdf->Cell(40,12,'TELEFONO',1);
$pdf->Cell(45,12,'ESTADO',1);


$pdf->Ln();
$pdf->SetFont('Arial','',12, 'UTF-8');
//Mostramos el contenido de la tabla
foreach($result as $row)
{
$pdf->Cell($w[0],6,$row['coddoce'],1);
$pdf->Cell($w[1],6,utf8_decode($row['nomprof']),1);
$pdf->Cell($w[2],6,utf8_decode($row['apeprof']),1);
$pdf->Cell($w[3],6,utf8_decode($row['email']),1);
$pdf->Cell($w[4],6,utf8_decode($row['telef']),1);
$pdf->Cell($w[5],6,utf8_decode($row['estado']),1);


$pdf->Ln();
}
$pdf->Output('instructores.pdf', 'D');
?>
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
$this->Cell(95,10,'Lista de participantes',1,0,'C');
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
$display_heading = array('codalum'=>'#', 'nombrea'=> 'Nombre', 'apellidoa'=> 'Apellido','direccion'=> 'Direccion','estado'=> 'Estado');

$result = mysqli_query($connString, "SELECT alumnos.codalum, alumnos.dnia, alumnos.nombrea, alumnos.apellidoa, padres.nompadr,  grado.nomgra, clase.nomclase, seccion.nomsec, 
alumnos.fecha_naci, alumnos.genero, alumnos.grupo_san, alumnos.direccion, alumnos.pais,alumnos.foto, alumnos.usualu, alumnos.password,alumnos.role,alumnos.fechare ,alumnos.estado, alumnos.fecha_create 
FROM alumnos INNER JOIN padres ON alumnos.codpad = padres.codpad INNER JOIN grado ON alumnos.codgra=grado.codgra INNER JOIN clase ON alumnos.codclase= clase.codclase INNER JOIN seccion ON alumnos.codsec=seccion.codsec"
) or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM alumnos");

$pdf = new PDF('L','mm','A4');
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12, 'UTF-8');
// Declaramos el ancho de las columnas
$w = array(10,50,50,150,40,45,41);
//Declaramos el encabezado de la tabla
$pdf->Cell(10,12,'#',1);
$pdf->Cell(50,12,'NOMBRE',1);
$pdf->Cell(50,12,'APELLIDO',1);
$pdf->Cell(150,12,'DIRECCION',1);


$pdf->Ln();
$pdf->SetFont('Arial','',12, 'UTF-8');
//Mostramos el contenido de la tabla
foreach($result as $row)
{
$pdf->Cell($w[0],6,$row['codalum'],1);
$pdf->Cell($w[1],6,utf8_decode($row['nombrea']),1);
$pdf->Cell($w[2],6,utf8_decode($row['apellidoa']),1);
$pdf->Cell($w[3],6,utf8_decode($row['direccion']),1);


$pdf->Ln();
}
$pdf->Output('participante.pdf', 'D');
?>
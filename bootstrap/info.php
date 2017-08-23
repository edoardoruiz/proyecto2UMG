<html>
	<head>
		<title> prueba de PHP </title>
	</head>
	<body>
<?php
echo '<p> Hola Mundo 123</p>';
//$link = mysql_connect("localhost","root","123456","umg")
//	or die("no se pudo conectar" .mysql_error());
//echo 'conectado';
class Conexion {
private $servidor = "localhost";
private $usuario = "root" ;
private $pass = "123456";
private $based = "umg";
private $conn;

public function conectar(){
echo "Metodo Conectar";
$this->conn = new mysqli(
$this->servidor,
$this->usuario,
$this->pass,
$this->based
);
echo "fin";
//if ($this->conn->connect_errno){
//echo "error";
//echo "Fallo al conectara MySQL: (".$this->conn->connect_errno.")".$this->conn->connect_error;
//	}
}
public function desconectar(){
echo 'hola';
	self::conectar();
	$this->conn->close();
	echo'Desconectado';
}

}
$ejemplo = new Conexion();
$ejemplo->conectar();
$ejemplo->desconectar();


//$query = 'select * from prueba1';
//$result = mysql_query($query) or die ('Consulta Fallida'.mysql_error());
?>
	</body>
</html>

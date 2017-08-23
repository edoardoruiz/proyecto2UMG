<html>
	<head>
		<title> prueba de PHP 2 </title>
	</head>
	<body>
<?php
echo '<p> Hola Mundo 123</p>';
$servername = "localhost";

$username = "root";
$password = "compu123456";
$dbname ="umg";
//crea la conexion
$con = new mysqli($servername, $username , $password , $dbname);
if ($conn->connect_error)
{
echo "error";
	die("Concection Falided:  " .$conn->connect_error);

}
else
{
echo 'funciona';
}

//$sql = "select 1  as id";
//$result = $conn->query($sql);
//echo  "select ";

//if($result-> num_rows >0)
//{
//echo "hola";
//while($row = $result->fetch_assoc())
//{
//echo "Id ";.$row("id");
//}
//else
//{
//echo "0 resultados";
//}
//}


?>
	</body>
</html>

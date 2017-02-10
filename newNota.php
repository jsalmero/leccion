

<?php
 	

	echo "<a href = 'createNota.php' >Nuevo</a>";
	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "<a href = 'readNota.php' >Volver</a>"; 
	echo "&nbsp;";
	echo "&nbsp;"; 
	
	echo "<a href = 'logout.php' >Salir</a>"; 

$n = $_POST['Nombre'];
$a = $_POST['Parcial'];
$a = $_POST['Final'];
$a = $_POST['Mejoramiento'];
$a = $_POST['Aprueba'];

include_once("NotaCollector.php");
$NotaCollectorObj = new NotaCollector();
$NotaCollectorObj->insertNotas($n,$a);
echo "&nbsp;";  
echo "Registro Ingresado : ".$n .$a;

?>

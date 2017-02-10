<!DOCTYPE html>

<?php
 	

	echo "<a href = 'createNota.php' >Nuevo</a>";
	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "<a href = 'readNota.php' >Menu</a>"; 
	echo "&nbsp;";
	echo "&nbsp;"; 
	echo "<a href = 'logout.php' >Salir</a>"; 
?>

<html lang ="en">
	<head>
		<title>MenuPrincipal</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet" >

	</head>

	<body>


<form method= "POST" class="form-horizontal" action= "newNota.php" id="nota" title="nota" >
     <div class="form-group">
         <label for="inputName" class="control-label col-xs-2">Nombre:</label>
         <div class="col-xs-10">
             <input name = "Nombre" type="text" id= "Nombre" class="form-control" placeholder="Nombre">
         </div>
     </div>
     <div class="form-group">
         <label for="inputEstado" class="control-label col-xs-2">Parcial:</label>
         <div class="col-xs-10">
             <input name = "Estado" type="text" id= "Estado" class="form-control" placeholder="Parcial">
         </div>
     </div>
     <div class="form-group">
         <label for="inputEstado" class="control-label col-xs-2">Final:</label>
         <div class="col-xs-10">
             <input name = "Estado" type="text" id= "Estado" class="form-control" placeholder="Final">
         </div>
     </div>
     <div class="form-group">
         <label for="inputEstado" class="control-label col-xs-2">Mejoramiento:</label>
         <div class="col-xs-10">
             <input name = "Estado" type="text" id= "Estado" class="form-control" placeholder="Mejoramiento">
         </div>
     </div>
    <div class="form-group">
         <label for="inputEstado" class="control-label col-xs-2">Aprueba:</label>
         <div class="col-xs-10">
             <input name = "Estado" type="text" id= "Estado" class="form-control" placeholder="Aprueba">
         </div>
     </div>
     <div class="form-group">
         <div class="col-xs-offset-2 col-xs-10">
             <button type="submit" class="btn btn-primary"> <a href = 'newNota.php'></a>Ingresar</button>
         </div>
     </div>
</form>

	
	</script>
        <script src="js/jquery.bootgrid.min.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src= "js/jquery.js" ></script>
	<script src= "js/bootstrap.min.js" ></script>


	</body>
</html>




<?php
$txtid=(isset($_POST['txtid']))?$_POST['txtid']:"";
$txtnombre=(isset($_POST['txtnombre']))?$_POST['txtnombre']:"";
$txtapellidop=(isset($_POST['txtapellidop']))?$_POST['txtapellidop']:"";
$txtapellidom=(isset($_POST['txtapellidom']))?$_POST['txtapellidom']:"";
$txtcorreo=(isset($_POST['txtcorreo']))?$_POST['txtcorreo']:"";
$txtfoto=(isset($_POST['txtfoto']))?$_POST['txtfoto']:"";

include ("../conexion/conexion.php");
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

switch ($accion) {
	case "btn1":
	/**echo $txtnombre;
	echo $txtapellidop;
	echo $txtapellidom;
	echo $txtcorreo;
	echo $txtfoto;**/
		$sentencia=$pdo->prepare("INSERT INTO empleados (Nombre,ApellidoP,ApellidoM,Correo,Foto)VALUES(:Nombre,:ApellidoP,:ApellidoM,:Correo,:Foto)");
		$sentencia->bindParam(':Nombre',$txtnombre);
		$sentencia->bindParam(':ApellidoP',$txtapellidop);
		$sentencia->bindParam(':ApellidoM',$txtapellidom);
		$sentencia->bindParam(':Correo',$txtcorreo);
		$sentencia->bindParam(':Foto',$txtfoto);
		$sentencia->execute();

		echo $txtid;
		echo "presionaste btn1";
	break; 
	case 'btn2':
		echo "presionaste modificar";
	break;
	case 'btn3':
		echo "presionaste eliminar";
	break;
	case 'btn4':
		echo "presionaste cancelar";
	break;
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>CRUD de Php y Mysql</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<form action="" method="post" enctype="multipart/form-data">
			<label for="">Id:</label>
			<input type="text" name="txtid" placeholder="" id="txtid" require="">
			<br>
			<label for="">Nombre:</label>
			<input type="text" name="txtnombre" placeholder="" id="txtnombre" require="">
			<br>
			<label for="">Apellido Paterno:</label>
			<input type="text" name="txtapellidop" placeholder="" id="txtapellidop" require="">
			<br>
			<label for="">Apellido Materno:</label>
			<input type="text" name="txtapellidom" placeholder="" id="txtapellidom" require="">
			<br>
			<label for="">Correo:</label>
			<input type="text" name="txtcorreo" placeholder="" id="txtcorreo" require="">
			<br>
			<label for="">Foto:</label>
			<input type="text" name="txtfoto" placeholder="" id="txtfoto" require="">
			<br>

			<button value="btn1" type="submit" name="accion">Agregar</button>
			<button value="btn2" type="submit" name="accion">Modificar</button>
			<button value="btn3" type="submit" name="accion">Eliminar</button>
			<button value="btn4" type="submit" name="accion">Cancelar</button>
		</form>
	</div>
	
</body>
</html>
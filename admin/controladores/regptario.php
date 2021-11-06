<?php


if (isset($_POST['botonp']) && isset($_POST['cel']) && isset($_POST['nombre'])) {
	include ('conexion.php');
	$documento=$_POST['documento'];
	$nombre=$_POST['nombre'];
	$apellido1=$_POST['apellido1'];
	$apellido2=$_POST['apellido2'];
	$tel=$_POST['tel'];
	$cel=$_POST['cel'];
	$correo=$_POST['correo'];

	$query="INSERT INTO propietarios(documento,nombre,apellido1,apellido2,tel,cel,correo)VALUES(?,?,?,?,?,?,?)";
	$consulta=$pdo->prepare($query);

	if($consulta->execute(array($documento,$nombre,$apellido1,$apellido2,$tel,$cel,$correo))){
	    echo "<script>alert('Propietario Registrado Correctamente');
		window.location.href='../regpropietarios.php';
		</script>";
	}else{
		 echo "<script>alert('Error en registro de propietario');
		 window.location.href='../regpropietarios.php';
		 </script>";
	}
}else{
	echo "<script>alert('Ingrese valores en el formulario');
		 window.location.href='../regpropietarios.php';
		 </script>";
}

?>
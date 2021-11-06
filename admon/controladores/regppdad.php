<?php


if (isset($_POST['botonpd']) && isset($_POST['propietario']) && isset($_POST['tipo'])) {
	include ('conexion.php');
	$tipo=$_POST['tipo'];
	$depto=$_POST['depto'];
	$ciudad=$_POST['ciudad'];
	$ubicacion=$_POST['ubicacion'];
	$tamano=$_POST['tamano'];
	$precio=$_POST['precio'];
	$descripcion=$_POST['descripcion'];
	$caracteristicas=$_POST['caracteristicas'];
	$disponibilidad=$_POST['disponibilidad'];
	$banos=$_POST['banos'];
	$habitaciones=$_POST['habitaciones'];
	$propietario=$_POST['propietario'];

	$query="INSERT INTO propiedades(tipo_propiedad,depto,ciudad,ubicacion,tamano,precio,descripcion,caracteristicas,disponibilidad,banos,habitaciones,propietarios_documento)VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
	$consulta=$pdo->prepare($query);

	if($consulta->execute(array($tipo,$depto,$ciudad,$ubicacion,$tamano,$precio,$descripcion,$caracteristicas,$disponibilidad,$banos,$habitaciones,$propietario))){
	    echo "<script>alert('Propiedad Registrada Correctamente');
		window.location.href='../regpropiedades.php';
		</script>";
	}else{
		 echo "<script>alert('Error en registro de propietario');
		 window.location.href='../regpropiedades.php';
		 </script>";
	}
}else{
	echo "<script>alert('Ingrese valores en el formulario');
		 window.location.href='../regpropietarios.php';
		 </script>";
}

?>
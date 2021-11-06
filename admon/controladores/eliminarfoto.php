<?php 

$idf=$_GET['id'];

include 'conexion.php';

$query= "DELETE FROM fotos WHERE id = $idf";
$consulta=$pdo->prepare($query);
$consulta->execute();

echo "<script>alert('Foto eliminada!');
		window.location.href='../fotos.php';</script>";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Propietarios</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<?php 
// include 'navbar.php'; 
include 'controladores/conexion.php';
session_start();
if (isset($_GET['ppt'])) {
  $id=$_GET['ppt'];
  $iddoc=$_GET['ppd'];
  $nom=$_GET['nom'];
  $ape=$_GET['ape'];
  $_SESSION['ppt']  =$_GET['ppt'];
  $_SESSION['ppd']=$_GET['ppd'];
  $_SESSION['nom'] =$_GET['nom'];
  $_SESSION['ape'] =$_GET['ape'];
}  
?>
<!-- Formulario inscripción -->
<div class="container">
<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <div class="row">
      <div class="col-lg-10">
        <div class="p-5">
          <div class="text-center">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <form action="controladores/cerrarsesion.php" method="POST">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" name="boton2" class="btn btn-danger btn-md"> Cerrar </button></div>
              </form>
            </div>
            <h1 class="h2 text-gray-900 mb-4">Fotos de propiedad con codigo <?php echo $_SESSION['ppt'] ." del propietario <b>".$_SESSION['nom']." ".$_SESSION['ape'] ?> </h1>
          </div>
          <!-- formulario de busqueda -->
          <div class="container">
                <form action="" method="POST" enctype="multipart/form-data">
                   <div class="form-control">
                      <input type="hidden" name="ppid" value="<?php echo $id?>">
                      <input type="hidden" name="iddoc" value="<?php echo $iddoc?>">
                      <input type="hidden" name="nom" value="<?php echo $nom?>">
                      <input type="hidden" name="ape" value="<?php echo $ape?>">
                      <input class="form-control" type="file" name="imagen" accept="image/*" required="">
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <button type="submit" name="boton2" class="btn btn-secondary btn-md w-50 ">Registrar</button>
                    </div>
                </form>
          </div>
            <!-- Tabla de propietarios -->
            <div class="container">
            <table class="table table-striped">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">PROPIETARIO</th>
                      <th scope="col">RUTA</th>
                      <th scope="col">ACCIONES</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                   include ('controladores/conexion.php');
                    $id=$_SESSION['ppt'];
                   $query="SELECT * FROM fotos WHERE propiedades_id=$id";
                    $consulta=$pdo->prepare($query);
                    $consulta->execute();
                    if($consulta->rowCount()>=1){
                     while($fila=$consulta->fetch()){ ?>
                      <tr>
                        <th scope='row'><?php echo $fila["propiedades_id"]?></th>
                        <td><img src="<?php echo $fila['ruta']; ?>" width="420" heigth="auto"> </td>
        <td>
          <a href="controladores/eliminarfoto.php?id=<?php echo $fila["id"]?>">Eliminar</a>
          <a href="fotos.php?id=<?php echo $fila["id"]?>">Fotos</a>
        </td>
                           </tr>
                        <?php       
                      }
                    }
                    echo "¿Quieres agregar una foto a la propiedad?";
                    ?>
                  </tbody>
                </table>
            </div>   
           </div>
         </div>
        </div>
    </div>
</div>

</div>
<?php 
if(isset($_POST['boton2'])) {
  $id=$_SESSION['ppt'];
  // session_start();
  $_SESSION['id']=$id;
  $ruta='img/'.$_FILES['imagen']['name'];
  move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta);

  $query="INSERT INTO fotos(ruta,propiedades_id)VALUES(:R,:P)";
  $consulta=$pdo->prepare($query);
  $consulta->bindParam(':R',$ruta);
  $consulta->bindParam(':P',$id);
  if($consulta->execute()){
    echo "<script>alert('Foto Almacenada');
                  window.location.href='fotos.php';</script>";

  }else{
    echo "error de almacenamiento";
  }
}
?>
</body>
</html>
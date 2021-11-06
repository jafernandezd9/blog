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
include 'navbar.php';
?>
<!-- Formulario inscripción -->
<div class="container">
<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <div class="row">
      <div class="col-lg-10">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h2 text-gray-900 mb-4">Listado propietarios</h1>
          </div>
          <!-- formulario de busqueda -->
          <div class="container">
             <label><p class="font-weight-bold">Buscar:</p></label>
                <form action="" method="POST">
                   <div class="form-control">
                      <input autofocus class="form-control" type="text" name="buscar" placeholder="Código">
                      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <button type="submit" name="boton1" class="btn btn-secondary btn-md w-50 ">Buscar</button>
                    </div>
                </form>
          </div>
            <!-- Tabla de propietarios -->
            <?php
          if (isset($_POST['boton1']) && isset($_POST['buscar'])) {
            ?>
            <div class="container">
            <table class="table table-striped">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">DOCUMENTO</th>
                      <th scope="col">NOMBRE</th>
                      <th scope="col">APELLIDOS</th>
                      <th scope="col">TELEFONO</th>
                      <th scope="col">CELULAR</th>
                      <th scope="col">CORREO</th>
                      <th scope="col">ACCIONES</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                    include ('controladores/conexion.php');
                    $buscar=$_POST['buscar'];
                    $buscar= "%$buscar%";
                    $query="SELECT * FROM propietarios WHERE documento LIKE ? OR nombre LIKE ? OR apellido1 LIKE ? OR apellido2 LIKE ? OR tel LIKE ? OR cel LIKE ? OR correo LIKE ?";
                    $consulta=$pdo->prepare($query);
                    $consulta->execute(array($buscar,$buscar,$buscar,$buscar,$buscar,$buscar,$buscar));
                    if($consulta->rowCount()>=1){
                     while($fila=$consulta->fetch()){ ?>
                      <tr>
                        <th scope='row'><?php echo $fila["documento"]?></th>
                        <td><?php echo $fila['nombre']?></td>
                        <td><?php echo $fila['apellido1'].' '.$fila['apellido2']?></td>
                        <td><?php echo $fila['tel']?></td>
                        <td><?php echo $fila['cel']?></td>
                        <td><?php echo $fila['correo']?></td>
        <td><a href="../vistas/actualizar.php?id=<?php echo $fila["idProducto"]?>">Editar </a>
        <a href="../controlador/Eliminarprod.php?id=<?php echo $fila["idProducto"]?>"> Eliminar</a></td>
                           </tr>
                        <?php       
                         }
                       }
            }else{
                echo "Digita un indicio de busqueda";
                
            }
                
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


</body>
</html>
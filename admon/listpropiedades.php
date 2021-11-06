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
            <h1 class="h2 text-gray-900 mb-4">Listado propiedades</h1>
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
                      <th scope="col">TIPO</th>
                      <th scope="col">PROPIETARIO</th>
                      <th scope="col">DEPARTAMENTO</th>
                      <th scope="col">CIUDAD</th>
                      <th scope="col">ESTADO</th>
                      <th scope="col">PRECIO</th>
                      <th scope="col">DESCRIPCIÓN</th>
                      <th scope="col">CARACTERÍSTICAS</th>
                      <th scope="col">ACCIONES</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                    include ('controladores/conexion.php');
                    $buscar=$_POST['buscar'];
                    $buscar= "%$buscar%";
           $query="SELECT * FROM propiedades pd 
                   INNER JOIN propietarios pt ON pd.propietarios_documento=pt.documento
                    WHERE pt.nombre LIKE ? OR pt.apellido1 LIKE ? OR tipo_propiedad LIKE ? OR depto LIKE ? OR ciudad LIKE ? OR disponibilidad LIKE ? OR precio LIKE ? OR descripcion LIKE ? OR caracteristicas LIKE ? ";

                    $consulta=$pdo->prepare($query);
                    $consulta->execute(array($buscar,$buscar,$buscar,$buscar,$buscar,$buscar,$buscar,$buscar,$buscar));
                    if($consulta->rowCount()>=1){
                     while($fila=$consulta->fetch()){ ?>
                      <tr>
                        <th scope='row'><?php echo $fila["tipo_propiedad"]?></th>
                        <td><?php echo $fila['nombre'].' '.$fila['apellido1']?></td>
                        <td><?php echo $fila['depto']?></td>
                        <td><?php echo $fila['ciudad']?></td>
                        <td><?php echo $fila['disponibilidad']?></td>
                        <td><?php echo $fila['precio']?></td>
                        <td><?php echo $fila['descripcion']?></td>
                        <td><?php echo $fila['caracteristicas']?></td>
        <td><a href="../vistas/actualizar.php?id=<?php echo $fila["idProducto"]?>">Editar</a>
        <a href="fotos.php?ppt=<?php echo $fila["id"]; ?> & ppd=<?php echo $fila["documento"];  ?> & nom=<?php echo $fila["nombre"];  ?> & ape=<?php echo $fila["apellido1"];  ?>">Fotos</a></td>
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
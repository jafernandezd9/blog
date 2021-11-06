<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Porpietarios</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<?php 
include 'navbar.php';
include "controladores/conexion.php";
$query1="SELECT documento,nombre,apellido1,apellido2 FROM propietarios ORDER BY nombre";
$consulta1=$pdo->prepare($query1);
$consulta1->execute();
?>
<!-- Formulario inscripción -->
 <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                   <!--  <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                    <div class="col-lg-9">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registra una propiedad</h1>
                            </div>
                            <form class="user" action="controladores/regppdad.php" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-2">
                                        Seleccione un propietario 
                                      <select class="form-select" name="propietario" required>
                                        <option selected value="">Propietario</option>
                                        <?php 
                                        foreach ($consulta1 as $r) {
                                         echo "<option value=".$r[0].">".$r[1]." ".$r[2]." ".$r[3]."</option>";
                                        }
                                        ?>                  
                                      </select>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-2">
                                    Selecciona el tipo
                                        <select class="form-select " aria-label=".form-select-lg example" required name="tipo">
                                          <option selected value="">Escoja el Tipo</option>
                                          <option value="Finca">Finca</option>
                                          <option value="Lote">Lote</option>
                                          <option value="Casa">Casa</option>
                                          <option value="Apartamento">Apartamento</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-2">
                                    Departamento
                                    <select class="form-select " aria-label=".form-select-lg example" name="depto">
                                          <option value="Atlántico">Atlántico</option>
                                          <option value="Antioquia">Antioquia</option>
                                          <option value="Sucre">Cesar</option>
                                          <option value="Córdoba" selected>Córdoba</option>
                                          <option value="Sucre">Santader</option>
                                          <option value="Sucre">Sucre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                 <div class="col-sm-6 mb-3 mb-sm-2">
                                   <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Ciudad" name="ciudad"></div>
                                    <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Ubicación" name="ubicacion">
                                    </div>
                                </div>
                                <div class="form-group">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-2">
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Tamaño" name="tamano">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-2" >
                                        <input type="number" class="form-control form-control-user"id="exampleInputPassword" placeholder="Precio venta" name="precio">
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-2">
                                        <input type="number" class="form-control form-control-user" id="exampleInputEmail" name="banos" placeholder="Número de baños">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-2">
                                        <input type="number" class="form-control form-control-user" id="exampleInputPassword" placeholder="Número de habitaciones" name="habitaciones">
                                    </div>
                                </div>
                                <div class="form-group row">            
                                   <div class="col-sm-12 mb-3 mb-sm-2">
                                        <select class="form-select " aria-label=".form-select-lg example" required="" name="disponibilidad">
                                            <option value="">Disponibilidad</option>
                                          <option value="Disponible">Disponible</option>
                                          <option value="Arrendada">Arrendada</option>
                                          <option value="En reparación">En reparación</option>
                                          <option value="Vendida">Vendida</option>
                                          <option value="No disponible">No disponible</option>
                                        </select>
                                    </div>          
                                </div>    
                                 <div class="form-group row">
                                  <div class="col-sm-12 mb-3 mb-sm-2">
                                    <textarea class="form-control " name="descripcion" >Descripción
                                    </textarea>        
                                  </div>
                                </div>     
                                <div class="form-group row">
                                  <div class="col-sm-12 mb-3 mb-sm-2">
                                    <textarea class="form-control " name="caracteristicas" >Características
                                    </textarea>        
                                  </div>
                                </div>        
                                 <button type="submit" class="btn btn-primary btn-lg" name="botonpd" >Registrar propiedad</button>
                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>         


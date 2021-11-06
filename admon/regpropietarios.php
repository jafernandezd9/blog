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
?>
<!-- Formulario inscripción -->
 <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Registra una propietario</h1>
                            </div>
                            <form class="user" action="controladores/regptario.php" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-2">
                                    Tipo de documento
                                        <select class="form-select " aria-label=".form-select-lg example" >
                                          <option value="Cedula">Cédula</option>
                                          <option value="Cedula extranjeria">Cedula Extranjería</option>
                                          <option value="NIT">NIT</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-2">
                                        <input type="number" class="form-control form-control-user" id="exampleFirstName" name="documento" placeholder="Número de documento" required="">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-2">
                                          <input type="text" class="form-control form-control-user" id="exampleFirstName" name="nombre" placeholder="Nombre" required="">
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-2">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" name="apellido1" placeholder="Primer apellido" required="">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-2">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" name="apellido2" placeholder="Segundo apellido">
                                    </div>
                                  </div>  
                                <div class="form-group">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-2">
                                        <input type="number" class="form-control form-control-user" id="exampleInputEmail" name="tel" placeholder="Número de Telefono">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-2">
                                        <input type="number" class="form-control form-control-user" id="exampleInputPassword" placeholder="Número de Celular" name="cel" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control form-control-user" id="exampleRepeatPassword" name="correo" placeholder="Correo electrónico">
                                    </div>            
                                </div>  
                                <br>          
                                <button type="submit" class="btn btn-primary btn-lg" name="botonp" style="border-radius: 10em;">Registrar propietario</button>
                             
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>
</html>
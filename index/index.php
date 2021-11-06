<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Idear Inmobiliaria</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <style type="text/css">
         #app-messenger, #app-whatsapp{

           position: fixed;
           left: 124px;
           bottom: 25px;
           width: 60px;
           z-index: 1000;
           display: none;
         }
         #app-whatsapp{
              bottom: 95px;
              display: block;
         }
         #app-messenger i, #app-whatsapp i{
              font-size: 63px;
         }
         #app-whatsapp i{
              color: #1ebea5;
         }
         #app-messenger i{
              color: #0084ff;     
         }

      </style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->



<!-- activar mas tarde -->
      <!-- <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div> -->
      <!-- end loader -->
      



      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="header_white_section">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="header_information">
                           <ul>
                              <li><img src="images/1.png" alt="#"/>Cll 10 N°12-26 B/La Esperanza</li>
                              <li><img src="images/2.png" alt="#"/>3126036437 - 6047692679</li>
                              <li><img src="images/3.png" alt="#"/> indiraespitiapetro@gmail.com</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="index.html"><img src="images/logo2.png" width="300" height="auto" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li class="active"> <a href="#">Inicio</a> </li>
                                 <li><a href="#about">Nosotros</a></li>
                                 <li><a href="#travel">Compra</a></li>
                                 <li><a href="#blog">Encuentranos</a></li>
                                 <li><a href="#contact">Contactanos</a></li>
                                 <li><a href="../admin/login.php"><button type="button" class="btn btn-primary btn-lg">Ingresar</button></a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <section >
         <div class="banner-main">
            <center> <img src="images/banner2.jpg" alt="#"/></center>
         </div>
      </section>
      <!-- no borrar -formulario de busqueda -->
       <!-- <div class="container">
                     <form class="main-form">
                        <h3>Busca tu propiedad</h3>
                        <div class="row">
                           <div class="col-md-9">
                              <div class="row">
                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >Palabra clave</label>
                                    <input class="form-control" placeholder="" type="text" name="">
                                 </div>
                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >Categoría</label>
                                    <select class="form-control" name="Any">
                                       <option>Propiedad</option>
                                       <option>Casa</option>
                                       <option>Apartamento</option>
                                       <option>Finca</option>
                                       <option>Lote</option>
                                    </select>
                                 </div>
                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >Precio mínimo</label>
                                    <input class="form-control" placeholder="00.0" type="text" name="00.0">
                                 </div>
                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >Duración</label>
                                    <input class="form-control" placeholder="Any" type="text" name="Any">
                                 </div>
                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >Fecha</label>
                                    <input class="form-control" placeholder="Any" type="date" name="Any">
                                 </div>
                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                                    <label >Precio máximo</label>
                                    <input class="form-control" placeholder="00.0" type="text" name="00.0">
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                              <a href="#">Buscar</a>
                           </div>
                        </div>
                     </form>
                  </div> -->

<!-- CHAT CON WSAPP -->
      <a id="app-whatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=573126036437&amp;text=Hola!&nbsp;Inmobiliaria Idear&nbsp;estoy&nbsp;interesado&nbsp;en&nbsp;una&nbsp;propiedad!" > 
      <i class="fab fa-whatsapp-square"></i></a>

      <!-- about -->
      <div id="about" class="about">
         <div class="container">
            <div class="row ">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2>Nosotros</h2>
                     <span>CUMPLIMOS TUS SUEÑOS</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="bg">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <div class="about-box">
                        <p align="justify"> <font size="5"><span>Hola, somos<b> Idear Constructora Inmobiliaria S.A.S. </b>con personería jurídica, reconocida a nivel local y nacional,  contamos con  personal calificado en  asesorias   para la adquisición o  venta de bienes inmuebles   urbanos y rurales, así como servicio de construcción y remodelación de viviendas, con altos standard de calidad, tecnología, y seguridad, manteniendo excelentes relaciones con nuestros clientes y proveedores. 
                        orientamos en  todo lo  referente a trámites de documentos, crédito y vivienda.</span> </font> </p>
                        <div class="palne-img-area">
                           <br><br><br><br>
                           <img src="images/house2.png" alt="images" width="680">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a href="#">Inicio</a>
         </div>
      </div>
      <!-- end about -->
      <!-- traveling -->
      <div id="travel" class="traveling">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2>Propiedades en venta y arriendos</h2>
                     <span>Selecciona la propiedad de tus sueños. A continuación encontrarás diferentes tipos de propiedades para venta y arriendo, encuentra la de tu gusto, seleccionala, conocela y nos contáctaremos contigo. Hacemos realidad tu sueño.</span> 
                  </div><br>
               </div>
            </div>
            <hr>

         <!-- consulta para traer los datos de la tabla propiedades -->
         <?php 
         include "../admon/controladores/conexion.php";
// $query="SELECT pd.id,pd.tipo_propiedad,pd.depto,pd.ciudad,pd.tamano,pd.descripcion,pd.caracteristicas,pd.propietarios_documento,f.ruta,f.propiedades_id FROM fotos f INNER JOIN propiedades pd ON pd.id=f.propiedades_id ORDER BY pd.id asc";
         $query1="SELECT * FROM propiedades WHERE tipo_propiedad='Finca'";
         $consulta1=$pdo->prepare($query1);
         $consulta1->execute();
         $query2="SELECT Distinct * FROM fotos";
         $consulta2=$pdo->prepare($query2);
         $consulta2->execute();
         // $query3="SELECT * FROM fotos";
         // $consulta3=$pdo->prepare($query3);
         // $consulta3->execute();
         ?>

   <h1 align="center" ><b>FINCAS</b></h1><hr>
       <div class="row">
         <!-- < tarjeta original  -->
         <?php
         if($consulta1->rowCount()>=1){
            while($fila1=$consulta1->fetch(PDO::FETCH_ASSOC)){     
               $fila2=$consulta2->fetch();
               // $fila3=$consulta3->fetch();?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <i><img src="../admon/<?php echo $fila2['ruta'] ?>" alt="icon"/></i>
                     <h3><b><?php echo $fila1['descripcion'] ?></b></h3>
                     <div class="read-more">
                     <!-- <a href="index.php?id=<?php echo $fila1['id']?>" > -->
                        <button href="index.php?id=<?php echo $fila1['id']?>" type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal1">CONOCELA</button><!-- </a> -->
                     </div>
                  </div>
               </div>
               <!-- ventana modal 1 -->
    <!--            <?php

      // include"../admon/controladores/conexion.php";
     // $ppid=$_GET['id'];
     //  $query1="SELECT * FROM propiedades WHERE tipo_propiedad='Finca' and id=$ppid";
       //  $consulta1=$pdo->prepare($query1);
        // $consulta1->execute();
        // $fila1=$consulta1->fetch();
      ?> -->
               <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog modal-lg" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                        <h2 align="center"><b>FOTOS DE FINCA</b></h2>
                        <p><h2><?php echo $fila1['caracteristicas'] ?></h2></p>  
                     </div> 
                        <!-- CARRUSEL CSS -->
            <?php
              $ppid=$_GET['id'];
              $query5="SELECT * FROM fotos WHERE propiedades_id = $ppid";
              $consulta5=$pdo->prepare($query5);
              $consulta5->execute();
              while($fila5=$consulta5->fetch()){  ?>        
                  <i><img src="../admon/<?php echo $fila5['ruta'] ?>" alt="icon"/></i>
                  <p align="center"><font color="red" size="4">Llámanos 3126036437 - 6047692679</font></p>
        <?php } ?>
                     <div class="modal-footer">
                        <font color="red"><b> Llámanos 3126036437 - 6047692679</b></font></p>
                     </div>
                   </div>
                 </div>
               </div>   
<?php    }
      }
      
         include "../admon/controladores/conexion.php";
         $query4="SELECT * FROM propiedades WHERE tipo_propiedad='Casa'";
         $consulta4=$pdo->prepare($query4);
         $consulta4->execute();
         ?>   
      </div>
         <!-- casas -->
         <hr><h1 align="center"><b>CASAS</b></h1><hr>
         <div class="row">
         <?php
         if($consulta4->rowCount()>=1){
            while($fila4=$consulta4->fetch(PDO::FETCH_ASSOC)){     
               $fila2=$consulta2->fetch();
               //$fila3=$consulta3->fetch();?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <i><img src="../admon/<?php echo $fila2['ruta'] ?>" alt="icon"/></i>
                     <h3><b><?php echo $fila4['descripcion'] ?></b></h3>
                     <div class="read-more">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">CONOCELA</button>
                     </div>
                  </div>
               </div>
            <?php
               }
         }
         ?>   
   <!-- imagen 2 -->
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <i><button type="button" data-toggle="modal" data-target="#exampleModal2">
                        <img src="fincas/2.1.jpeg" alt="icon"/></button></i>
                     <h3>Se venden 3 hectáreas en el municipio de Cereté</h3>
                     <p>Casas principales de material en excelente estado</p>
                     <div class="read-more">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">CONOCELA</button>
                     </div>
                  </div>
               </div>
               <!-- ventana modal 2 -->
               <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">  
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                        <h5>FINCA</h5>
                        <img src="fincas/2.2.jpeg" alt="icon"/>
                       <p>con 2 habitaciones- Baño interno - Cocina - Sala - comedor -Dos Casa de trabajadores con baño - Dos Kioscos - Cocina de leña - Columpios - Tanque elevado - 3 pozos artesanales - Agua potable - Luz electrica - Corrales - Gallinero - Porquerizas - Frutos de varias especies - Arboles maderables - Jardin - Valor $300.000.000 - Se escucha oferta -<font color="red"><b> Llámanos 3126036437 - 6047692679</b> </font></p>
                     </div>
                   </div>
                 </div>
               </div>
  
          </div>  <!-- cierre fincas -->
<!-- casas -->
      <hr><h1 align="center">CASAS</h1><hr>
      <div class="row">
<!-- septima -->
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <i><button type="button" data-toggle="modal" data-target="#exampleModal7">
                        <img src="fincas/7.1.jpeg" alt="icon"/></button></i>
                     <h3>Se vende casa</h3>
                     <p>Barrio la esperanza - Cereté</p>
                     <div class="read-more">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal7">CONOCELA</button>
                     </div>
                  </div>
               </div>
               <!-- ventana modal 4 -->
               <div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                        <h5>CASA</h5>
                        <img src="fincas/7.2.jpeg" alt="icon"/>
                       <p>Área 190 metros -Todos los servicios -Calle pavimentada -Tres habitaciones -Tres  baños (uno interno) -Sala comedor amplia -Cocina moderna -Kiosco grande -Camara de aire -Terraza enrejada -Valor $180 millones

                        -<font color="red"><b> Llámanos 3126036437 - 6047692679</b> </font>
                        </p>
                     </div>
                   </div>
                 </div>
               </div>
<!-- OCTAVA -->
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                  <div class="traveling-box">
                     <i><button type="button" data-toggle="modal" data-target="#exampleModal8">
                        <img src="fincas/8.1.jpeg" alt="icon"/></button></i>
                     <h3>Se vende casa barrio Santa Clara </h3>
                     <p>Enrejada totalmente por dentro y por fuera, terraza amplia</p>
                     <div class="read-more">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal8">CONOCELA</button>
                     </div>
                  </div>
               </div>
               <!-- ventana modal 4 -->
               <div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                        <h5>CASA</h5>
                        <img src="fincas/8.2.jpeg" alt="icon"/>
                       <p>Área 422 metros -5 habitaciones -Dos con baño interno - Un baño social -Estudio -Sala -Comedor -ocina grande integral -Cocina auxiliar -Sala Star -Kiosco de palma grande -Azador -Zona de labores -Perrera -Camara de aire -Garaje doble lineal -Enrrejada totalmente por dentro y por fuera -Terraza amplia -Jardineras externa e interna-Valor $370 millones -Se escucha oferta

                        -<font color="red"><b> Llámanos 3126036437 - 6047692679</b> </font>
                        </p>
                     </div>
                   </div>
                 </div>
               </div>

         </div>
              
      </div>
   </div> <!-- end traveling -->


      <!--London -->
      <div id="blog" class="blog">
      <div class="London">
          
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Visitanos en nuestras oficinas</h2>
                     <span><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.9471462662004!2d-75.79083035773108!3d8.884506352291735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5a2a3964f19703%3A0xbc17c61f930259f1!2zQ2wuIDEwICMxMi0yNiwgQ2VyZXTDqSwgQ8OzcmRvYmE!5e0!3m2!1ses!2sco!4v1620500869859!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></span> 
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="London-img">
               <figure><img src="images/London.jpg" alt="img"/></figure>
            </div>
         </div>
      </div>
   </div>
      <!-- end London -->
      <!--Tours -->
      <!-- <div class="Tours">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Propiedades destacadas</h2>
                     <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span> 
                  </div>
               </div>
            </div>
            <section id="demos">
               <div class="row">
                  <div class="col-md-12">
                     <div class="owl-carousel owl-theme">
                        <div class="item">
                           <img class="img-responsive" src="images/1.jpg" alt="#" />
                           <h3>Holiday Tour</h3>
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                        </div>
                        <div class="item">
                           <img class="img-responsive" src="images/2.jpg" alt="#" />
                           <h3>New York</h3>
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                        </div>
                        <div class="item">
                           <img class="img-responsive" src="images/3.jpg" alt="#" />
                           <h3>London</h3>
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                        </div>
                        <div class="item">
                           <img class="img-responsive" src="images/2.jpg" alt="#" />
                           <h3>Holiday Tour</h3>
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in soe suffk even slightly believable. If y be sure there</p>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </div> -->
      <!-- end Tours -->
      <!-- Amazing -->
      <!-- <div class="amazing">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="amazing-box">
                     <h2>Amazing London Tour</h2>
                     <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there</span>
                     <a href="#">Book Now</a><a href="#">Get More</a>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- end Amazing -->
      <!-- our blog -->
      <!-- <div id="blog" class="blog">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Nuestro blog</h2>
                     <span>Lorem Ipsum is that it has a more-or-less normal distribution of letters,</span> 
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="blog-box">
                     <figure><img src="images/blog-image0.jpg" alt="#"/>
                        <span>4 Feb 2019</span>
                     </figure>
                     <div class="travel">
                        <span>Post  By :  Travel  Agency</span> 
                        <p><strong class="Comment"> 06 </strong>  Comment</p>
                        <p><strong class="like">05 </strong>Like</p>
                     </div>
                     <h3>London Amazing Tour</h3>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web</p>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="blog-box">
                     <figure><img src="images/blog-image.jpg" alt="#"/>
                        <span>10 Feb 2019</span>
                     </figure>
                     <div class="travel">
                        <span>Post  By :  Travel  Agency</span> 
                        <p><strong class="Comment"> 06 </strong>  Comment</p>
                        <p><strong class="like">05 </strong>Like</p>
                     </div>
                     <h3>London Amazing Tour</h3>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web</p>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- end our blog -->
   

      <!-- footer -->
      <footer>
         <div id="contact" class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <ul class="location_icon">
                        <li> <a href="#"><img src="icon/facebook.png"></a></li>
                        <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                        <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                        <li> <a href="#"><img src="icon/instagram.png"></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="Follow">
                        <h3>CONTACTANOS</h3>
                        <span>BARRIO<br>La Esperanza,<br>
                        Calle 10 N° 12-26<br>
                        +057-3126036437<br>
                        6047692679</span>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                     <div class="Follow">
                        <h3>Enlaces adicionales</h3>
                        <ul class="link">
                           <li> <a href="#">Acerca de nosotros</a></li>
                           <li> <a href="#">Terminos y condiciones</a></li>
                           <li> <a href="#">Privacidad de información</a></li>
                           <li> <a href="#">Noticias</a></li>
                           <li> <a href="#">Contactanos</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                     <div class="Follow">
                        <h3>ESCRÍBENOS</h3>
                        <form action="enviar.php" method="POST">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <input class="Newsletter" placeholder="Digita tu nombre" type="text" name="nombre">
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                              <input class="Newsletter" placeholder="Digita tu # celular" type="text" name="celular">
                           </div>
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                              <input class="Newsletter" placeholder="Digita tu correo" type="text" name="correo">
                           </div>
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                              <textarea class="textarea" placeholder="Escribenos" type="text" name="comentario"></textarea>
                           </div>
                        </div>
                        <button class="Subscribe" name="enviar">Enviar</button>
                     </div></form>
                  </div>
               </div>
               <div class="copyright">
                  <div class="container">
                     <p>Copyright 2019 All Right Reserved By <a href=""></a></p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->

      <!-- Faceboon chat -->


      <!-- Javascript files-->
      <script src="https://kit.fontawesome.com/42c53db73c.js" crossorigin="anonymous"></script>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
             margin: 10,
             nav: true,
             loop: true,
             responsive: {
               0: {
                 items: 1
               },
               600: {
                 items: 2
               },
               1000: {
                 items: 3
               }
             }
           })
         })
      </script>
     
   </body>
</html>
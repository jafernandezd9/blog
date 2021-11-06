      <!-- ventana modal 1 -->
      <?php 
      // include"../admon/controladores/conexion.php";
      $ppid=$_GET['id'];
       $query1="SELECT * FROM propiedades WHERE tipo_propiedad='Finca' and id=$ppid";
         $consulta1=$pdo->prepare($query1);
         $consulta1->execute();
         $fila1=$consulta1->fetch();
      ?>
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
              $query5="SELECT ruta FROM fotos WHERE propiedades_id = $ppid";
              $consulta5=$pdo->prepare($query5);
              $consulta5->execute();
              while($fila5=$consulta5->fetch()){  ?>        
                  <i><img src="../admon/<?php echo $fila5['ruta'] ?>" alt="icon"/></i>
         <?php } ?>
                     <div class="modal-footer">
                        <font color="red"><b> Llámanos 3126036437 - 6047692679</b></font></p>
                     </div>
                   </div>
                 </div>
               </div>
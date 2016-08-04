
        <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
        </style>
    </head>
    <body>
        
          <div class="col-lg-7">
            <h3>Barrio</h3>
            <hr/>
        </div>
        <section class="col-lg-7 barrio" style="height:400px;overflow-y:scroll;">
            <?php  
            if($Conductor){
           echo "Dni del conductor: "; echo $Conductor->Dni_conductor; echo "<br>";
          echo "Nombre : ";      echo $Conductor->Nombre; echo "<br>";
          echo "Email : ";      echo $Conductor->Email; echo "<br>";
          echo "Telefono: ";      echo $Conductor->Telefono; echo "<br>";
          echo "Contraseña: ";      echo $Conductor->Contrasenna; echo "<br>";
          echo "Fecha de nacimiento: ";      echo $Conductor->Fecha_nacimiento; echo "<br>";
          echo "fk Nit empresa: ";      echo $Conductor->fk_nit_empresa; echo "<br>";
            }
            ?>
          <div class="right">
                    <a href="<?php echo $helper->url("Conductor","admin"); ?>&Dni_conductor=<?php echo $Conductor->Dni_conductor; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a href="<?php echo $helper->url("Conductor","Comuna"); ?>&Dni_conductor=<?php echo $Conductor->Dni_conductor; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a class="btnEliminarItem btn btn-danger" id="Dni_conductor-<?php echo $Conductor->Dni_conductor; ?>" href="#" type="button"   data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a>
                  <script type="text/javascript">
                      urlDelete = "<?php echo $helper->url("Conductor","borrarConductor")."&Dni_conductor="?>";
                  </script>  
 
               <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Eliminar</h4>
                            </div>
                            <div class="modal-body">
                                <p>¿Desea eliminar este registro? de ser asi se  eliminara el registros.</p>
                            </div>
                            <div class="modal-footer">
                                <a id="btnEliminar"><button type="button" class="btn btn-access" >Eliminar</button></a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

                            </div>
                        </div>
                    </div>
               </div>          </div>
                <hr/>
                 
        </section>
    </body>
</html>
 

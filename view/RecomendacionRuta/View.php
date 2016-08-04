<div class="container">
    <div class="row">
    	<div class="col-md-12">
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="<?php echo $helper->url("Usuario","admin"); ?>" target="_blank">Listar Usuarios</a></li>
                    <li><a href="<?php echo $helper->url("Usuario","crearUsuario"); ?>" target="_blank">Crear Usuarios</a></li>
                    <li><a href="#" target="_blank">Actualizar</a></li>
                    </ul>
            </div>

    </div>
   
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-3">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("RecomendacionRuta","admin"); ?>" target="_blank">Listar</a></li>
                    <li class="list-group-item"><a href="" target="_blank">Modificar </a></li>
                    </ul>
                    
  </div>
        </div>
    
    <div class="col-md-8">
            <h3>Recomendacion Ruta</h3>
            <hr/>
        </div>
        <section class="col-lg-7 barrio" style="height:400px;overflow-y:scroll;">
            <?php  
            if($Recomendacion){
           echo "Codigo de la ruta  "; echo $Recomendacion->Cod_ruta; echo "<br>";
          echo "Dni usuario ";      echo $Recomendacion->Dni_usuario; echo "<br>";
          echo "Recomendacion ";      echo $Recomendacion->Recomendacion; echo "<br>";
          echo "Tags";      echo $Recomendacion->tags; echo "<br>";
          echo "Fecha registro";      echo $Recomendacion->fecha_registro; echo "<br>";
            }
            ?>
          <div class="right">
                    <a href="<?php echo $helper->url("RecomendacionRuta","admin"); ?>&Cod_ruta=<?php echo $Recomendacion->Cod_ruta; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a href="<?php echo $helper->url("RecomendacionRuta","Comuna"); ?>&Cod_ruta=<?php echo $Recomendacion->Cod_ruta; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                  <a class="btnEliminarItem btn btn-danger" id="Cod_ruta-<?php echo $Rec->Cod_ruta; ?>" href="#" type="button"   data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a>
                  <script type="text/javascript">
                      urlDelete = "<?php echo $helper->url("RecomendacionRuta","borrarRecomendacionRuta")."&Cod_ruta="?>";
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
                </div>  
          </div>
                <hr/>
                 
        </section>

 

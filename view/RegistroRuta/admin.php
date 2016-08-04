<div class="container">
    <div class="row">
    	<div class="col-md-12"></div>
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="<?php echo $helper->url("Ruta","admin"); ?>" target="_blank">Listar Ruta</a></li>
                    <li><a href="<?php echo $helper->url("Ruta","crearRuta"); ?>" target="_blank">crear Ruta</a></li>
                    </ul>

    </div>
    
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-2">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("RegistroRuta","crearRegistroRuta"); ?>" target="_blank">Listar Registro rutas</a></li>
                    <li class="list-group-item"><a href="#" target="_blank">Modificar</a></li>
                    </ul>
                    
  </div>
        </div>
    
        
          <div class="col-lg-10">
            <h3>Registro ruta</h3>
            <hr/>
        </div>
        <section class="col-lg-7 usuario" style="height:400px;overflow-y:scroll;">
             <table class="table table-striped">
    <thead>
      <tr>
        <th>Codigo del Registro</th>
        <th>Fecha salida</th>
        <th>fecha llegada</th>
        <th>fk codigo de la ruta</th>
        <th>fk id del vehiculo</th>
        
         <th>Accion</th>
       </tr>
    </thead>
            <?php  
            foreach($allRgt as $reg) {?>
    <tbody>
         <tr>
        <td> <?php  echo $reg->Codigo_registroRuta; echo "<br>";?></td>
        <td> <?php  echo $reg->Fecha_salida; echo "<br>";?></td>
        <td> <?php  echo $reg->Fecha_llegada; echo "<br>";?></td>
        <td> <?php echo $reg->id_vehiculo; echo "<br>";?></td>
        
        <td>
             <div class="right">
                    <a href="<?php echo $helper->url("RegistroRuta","viewRegistroRuta"); ?>&Codigo_registroRuta=<?php echo $reg->Codigo_registroRuta; ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-search"></span></a>
                    <a href="<?php echo $helper->url("RegistroRuta","modificarRegistroRuta"); ?>&Codigo_registroRuta=<?php echo $reg->Codigo_registroRuta; ?>" class="btn btn-success"> <span class="glyphicon glyphicon-pencil"></span></a>
                    <a class="btnEliminarItem btn btn-danger" id="Codigo_registroRuta-<?php echo $reg->Codigo_registroRuta; ?>" href="#" type="button"   data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a>
                  <script type="text/javascript">
                      urlDelete = "<?php echo $helper->url("RegistroRuta","borrarRegistroRuta")."&Dni_controlador="?>";
                  </script>  
              </td>
              </tr>
         <?php } ?>
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
                </div></td>
      </tr>
    </tbody>
  </table>
          
         
         
         
         
        
                            </div>
                <hr/>
                 
        </section>
        </div>
</div>
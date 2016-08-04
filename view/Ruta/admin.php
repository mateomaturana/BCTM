
        
        <div class="container">
    <div class="row">
    	<div class="col-md-12"></div>
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="<?php echo $helper->url("Barrio","admin"); ?>" target="_blank">Listar Barrios</a></li>
                    <li><a href="<?php echo $helper->url("Barrio","crearBarrio"); ?>" target="_blank">Crear Barrios</a></li>
                    </ul>

    </div>
    
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-2">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("Ruta","admin"); ?>" target="_blank">Listar</a></li>
                    <li class="list-group-item"><a href="#" target="_blank">Modificar</a></li>
                    </ul>
                    
  </div>
        </div>
    
    <div class="col-md-10">
            <h3>Ruta</h3>
            <hr/>
        
        <section class="col-lg-7 usuario" style="height:400px;overflow-y:scroll;">
            <table class="table table-striped">
    <thead>
      <tr>
        <th>Codigo de la ruta</th>
        <th>Origen Barrio</th>
        <th>Destino Barrio</th>
        <th>Accion</th>
      </tr>
    </thead>
            <?php  
            foreach($allrut as $rut) {?>
    <tbody>
         <tr>
          <td> <?php echo $rut->Cod_ruta; echo "<br>";?></td>
          <td> <?php echo $rut->Origen_barrio_id; echo "<br>";?></td>
          <td> <?php echo $rut->Destino_barrio_id; echo "<br>";?></td>
          <td>
               <div class="right">
                    <a href="<?php echo $helper->url("Ruta","viewRuta"); ?>&Cod_ruta=<?php echo $rut->Cod_ruta; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></a>
                    <a href="<?php echo $helper->url("Ruta","modificarRuta"); ?>&Cod_ruta=<?php echo $rut->Cod_ruta; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a class="btnEliminarItem btn btn-danger" id="Cod_ruta-<?php echo $rut->Cod_ruta; ?>" href="#" type="button"   data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a>
                  <script type="text/javascript">
                      urlDelete = "<?php echo $helper->url("Ruta","borrarRuta")."&Cod_ruta="?>";
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

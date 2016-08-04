<div class="container">
    <div class="row">
    	<div class="col-md-12">
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="<?php echo $helper->url("Empresa","admin"); ?>" target="_blank">Listar Empresa</a></li>
                    
                    </ul>
</div>
    </div>
   
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-2">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("vehiculo","crearVehiculo"); ?>" target="_blank">Crear</a></li>
                    
                    </ul>
                    
  </div>
        
          <div class="col-lg-10">
            <h3>Vehiculo</h3>
            <hr/>
        
        <section class="col-lg-7 usuario" style="height:400px;overflow-y:scroll;">
             <table class="table table-striped">
    <thead>
      <tr>
        
        <th>placa</th>
        
        <th>Tipo del vehiculo</th>
        
        <th>fk Nit de la empresa</th>
        <th>Accion</th>
      </tr>
    </thead>
            <?php  
            foreach($allVeh as $veh) {?>
    <tbody>
      <tr>
          
          <td>  <?php  echo $veh->Placa_vehiculo; echo "<br>";?></td>
          
          <td> <?php  echo $veh->Tipo_vehiculo; echo "<br>";?></td>
          
          <td> <?php  echo $veh->fk_nit_empresa; echo "<br>";?></td>
          <td>
                    <div class="right">
                    <a href="<?php echo $helper->url("Vehiculo","viewVehiculo"); ?>&id_vehiculo=<?php echo $veh->id_vehiculo; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></a>
                    <a href="<?php echo $helper->url("Vehiculo","modificarVehiculo_transporte"); ?>&id_vehiculo=<?php echo $veh->id_vehiculo; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a class="btnEliminarItem btn btn-danger" id="id_vehiculo-<?php echo $veh->id_vehiculo; ?>" href="#" type="button"   data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a>
                  <script type="text/javascript">
                      urlDelete = "<?php echo $helper->url("Vehiculo","borrarVehiculo")."&id_vehiculo="?>";
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
                </div>
      </tr>
    </tbody>
  </table>
          
          
          
          
          
            
                       
          </div>
                <hr/>
                 
        </section>
        </div>
        </div>



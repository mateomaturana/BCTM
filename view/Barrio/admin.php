<div class="container">
    <div class="row">
    	<div class="col-md-12">
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="<?php echo $helper->url("Comuna","crearComuna"); ?>" target="_blank">Crear Comuna</a></li>
                    <li><a href="<?php echo $helper->url("Comuna","admin"); ?>" target="_blank">Listar Comunas</a></li>
                    
                    </ul>
            </div>

    </div>
    <div class="row">
    
        <div class="body">
            
        <div class="col-md-3">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("barrio","crearBarrio"); ?>" target="_blank">Crear</a></li>
                    
                    </ul>
                    
  </div>
        </div>
          <div class="col-lg-8">
            <h3>Barrio</h3>
            <hr/>
        </div>
        <section class="col-lg-7 usuario" style="height:400px;overflow-y:scroll;">
            <table class="table table-striped">
    <thead>
      <tr>
        <th>id barrio</th>
        <th>Nombre</th>
        <th>Nombre Comuna</th>
        <th>Accion</th>
      </tr>
    </thead>
            <?php  
            
            foreach($allbar as $barr) {?>
    <tbody>
     <tr>
        <td> <?php  echo $barr->id_barrio;  echo "<br>";?></td>
        <td> <?php echo $barr->Nombre; echo "<br>";?></td>
        <td> <?php echo $barr->Nombre_comuna; echo "<br>";?></td>
        <td><div class="right">
                    <a href="<?php echo $helper->url("barrio","viewBarrio"); ?>&id_barrio=<?php echo $barr->id_barrio; ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-search"></span></a>
                    <a href="<?php echo $helper->url("barrio","modificarBarrio"); ?>&id_barrio=<?php echo $barr->id_barrio; ?>" class="btn btn-success"> <span class="glyphicon glyphicon-pencil"></span></a>
        <a class="btnEliminarItem btn btn-danger" id="id_barrio-<?php echo $barr->id_barrio; ?>" href="#" type="button"   data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a>
                  <script type="text/javascript">
                      urlDelete = "<?php echo $helper->url("barrio","borrarBarrio")."&id_barrio="?>";
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
            
                <hr/>
               </div>   
        </section>
</div>
            </div>
</div>
    

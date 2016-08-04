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
            
        <div class="col-md-2">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("RecomendacionRuta","crearRecomendacionRuta"); ?>" target="_blank">Crear</a></li>
                    <li class="list-group-item"><a href="" target="_blank">Modificar </a></li>
                    </ul>
                    
  </div>
        </div>
        
          <div class="col-lg-8">
            <h3>Recomendacion Ruta</h3>
            <hr/>
        </div>
        <section class="col-lg-8 usuario" style="height:400px;overflow-y:scroll;">
             <table class="table table-striped">
    <thead>
      <tr>
        <th>Codigo de la ruta </th>
        <th>Dni usuario</th>
        <th>Recomendacion</th>
        <th>Tags</th>
        <th>Fecha registro</th>
        <th>Accion</th>
      </tr>
    </thead>
            <?php  
            foreach($allRec as $Rec) {?>
    <tbody>
      <tr>
          <td>  <?php  echo $Rec->Nombre_ruta; echo "<br>";?></td>
          <td><?php  echo $Rec->Dni_usuario; echo "<br>";?></td>
          <td><?php  echo $Rec->Recomendacion; echo "<br>";?></td>
          <td> <?php echo $Rec->tags; echo "<br>";?></td>
          <td><?php echo $Rec->fecha_registro; echo "<br>";?></td>
          <td>
                 <div class="right">
                    <a href="<?php echo $helper->url("RecomendacionRuta","viewRecomendacionRuta"); ?>&Cod_ruta=<?php echo $Rec->Cod_ruta; ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-search"></span></a>
                    <a href="<?php echo $helper->url("RecomendacionRuta","modificarRecomendacionRuta"); ?>&Cod_ruta=<?php echo $Rec->Cod_ruta; ?>" class="btn btn-success"> <span class="glyphicon glyphicon-pencil"></span></a>
                    <a class="btnEliminarItem btn btn-danger" id="Cod_ruta-<?php echo $Rec->Cod_ruta; ?>" href="#" type="button"   data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a>
                  <script type="text/javascript">
                      urlDelete = "<?php echo $helper->url("RecomendacionRuta","borrarRecomendacionRuta")."&Cod_ruta="?>";
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
      
    </tbody>
  </table>
                    
          </div>
                <hr/>
                
        </section>
        </div>
    

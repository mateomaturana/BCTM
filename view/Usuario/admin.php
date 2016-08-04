 <div class="container">
    <div class="row">
    	<div class="col-md-12"></div>
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="<?php echo $helper->url("Barrios","admin"); ?>" target="_blank">Listar Barrios</a></li>
                    <li><a href="<?php echo $helper->url("Ruta","admin"); ?>" target="_blank">Listar Rutas</a></li>
                    </ul>

    </div>
   
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-3">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("Usuario","crearBarrio"); ?>" target="_blank">Crear</a></li>
                    
                    </ul>
                    
  </div>
          <div class="col-lg-7">
            <h3>Usuario</h3>
            <hr/>
        </div>
        <section class="col-lg-7 usuario" style="height:400px;overflow-y:scroll;">
             <table class="table table-striped">
    <thead>
      <tr>
        <th>Dni del usuario</th>
        <th>Nombre del usuario</th>
        <th>Email del usuario</th>
        
        <th>Nombre del barrio</th>
        <th>Accion</th>
      </tr>
    </thead>
            <?php  
            foreach($allUsu as $usu) {?>
    <tbody>
      <tr>
          <td>   <?php echo  $usu->Dni_usuario; echo "<br>";?></td>
          <td>   <?php echo $usu->Nombre; echo "<br>";?></td>
          <td>  <?php  echo $usu->Email; echo "<br>";?></td>
           <td> <?php echo $usu->NombreBarrio; echo "<br>";?></td>
          <td>
                
          <div class="right">
                    <a href="<?php echo $helper->url("Usuario","viewUsuario"); ?>&Dni_usuario=<?php echo $usu->Dni_usuario; ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-search"></span></a>
                    <a href="<?php echo $helper->url("Usuario","modificarUsuario"); ?>&Dni_usuario=<?php echo $usu->Dni_usuario; ?>" class="btn btn-success"> <span class="glyphicon glyphicon-pencil"></span></a>
                    <a class="btnEliminarItem btn btn-danger" id="Dni_usuario-<?php echo $usu->Dni_usuario; ?>" href="#" type="button"   data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a>
                  <script type="text/javascript">
                      urlDelete = "<?php echo $helper->url("Usuario","borrarUsuario")."&Dni_usuario="?>";
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
  
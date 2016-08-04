 <div class="container">
    <div class="row">
    	<div class="col-md-12"></div>
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="<?php echo $helper->url("Empresa","crearEmpresa"); ?>" target="_blank">Crear Empresa</a></li>
                    <li class="active"><a href="<?php echo $helper->url("Empresa","admin"); ?>" target="_blank">Listar Empresa</a></li>
                    
                    </ul>

    </div>
    
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-3">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("Controlador","admin"); ?>" target="_blank">Listar</a></li>
                    <li class="list-group-item"><a href="#" target="_blank">Modificar</a></li>
                    </ul>
                    
  </div>
        </div>
          <div class="col-lg-7">
            <h3>Controlador</h3>
            <hr/>
        </div>
        <section class="col-lg-7 usuario" style="height:400px;overflow-y:scroll;">
             <table class="table table-striped">
    <thead>
      <tr>
        <th>Dni del controlador</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>fk Nit empresa</th>
        <th>Accion</th>
       </tr>
    </thead>
            <?php  
            foreach($allContEmp as $con) {?>
     <tbody>
         <tr>
        <td><?php  echo $con->Dni_controlador; echo "<br>";?></td>
        <td> <?php  echo $con->Nombre; echo "<br>";?></td>
        <td> <?php  echo $con->Telefono; echo "<br>";?></td>
        <td> <?php echo $con->Nombre_empresa; echo "<br>";?></td>
        <td>
              <div class="right">
                    <a href="<?php echo $helper->url("Controlador","viewControlador"); ?>&Dni_controlador=<?php echo $con->Dni_controlador; ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-search"></span></a>
                    <a href="<?php echo $helper->url("Controlador","modificarControlador"); ?>&Dni_controlador=<?php echo $con->Dni_controlador; ?>" class="btn btn-success"> <span class="glyphicon glyphicon-pencil"></span></a>
                    <a class="btnEliminarItem btn btn-danger" id="Dni_controlador-<?php echo $con->Dni_controlador; ?>" href="#" type="button"   data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a>
                  <script type="text/javascript">
                      urlDelete = "<?php echo $helper->url("Controlador","borrarControlador")."&Dni_controlador="?>";
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
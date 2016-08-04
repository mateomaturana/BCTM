
        
          <div class="col-lg-7">
            <h3>Empresa Transporte</h3>
            <hr/>
        </div>
        <section class="col-lg-8 usuario" style="height:400px;overflow-y:scroll;">
             <table class="table table-striped">
    <thead>
      <tr>
        <th>Nit de la empresa</th>
        <th>Nombre</th>
        <th>Email del usuario</th>
        <th>Direccion de la empresa</th>
        <th>Fecha registro</th>
        <th>Accion</th>
      </tr>
    </thead>
            <?php  
            foreach($allemp as $emp) {?>
    <tbody>
      <tr>
          <td> <?php  echo $emp->Nit_empresa; echo "<br>";?></td>
          <td> <?php  echo $emp->Nombre; echo "<br>";?></td>
          <td> <?php  echo $emp->Email; echo "<br>";?></td>
          <td><?php echo $emp->Direccion; echo "<br>";?></td>
          <td><?php echo $emp->fecha_registro; echo "<br>";?></td>
          <td>
                <div class="right">
                    <a href="<?php echo $helper->url("Empresa","viewEmpresa"); ?>&Nit_empresa=<?php echo $emp->Nit_empresa; ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-search"></span></a>
                    <a href="<?php echo $helper->url("Empresa","modificarEmpresa"); ?>&Nit_empresa=<?php echo $emp->Nit_empresa; ?>" class="btn btn-success"> <span class="glyphicon glyphicon-pencil"></span></a>
                    <a class="btnEliminarItem btn btn-danger" id="Nit_empresa-<?php echo $emp->Nit_empresa; ?>" href="#" type="button"   data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a>
                  <script type="text/javascript">
                      urlDelete = "<?php echo $helper->url("Empresa","borrarEmpresa")."&Nit_empresa="?>";
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


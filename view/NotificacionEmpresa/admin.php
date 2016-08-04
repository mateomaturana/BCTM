<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">

                <li class="active"><a href="<?php echo $helper->url("Empresa", "admin"); ?>" target="_blank">Listar Empresa</a></li>
                <li><a href="<?php echo $helper->url("Empresa", "crearEmpresa"); ?>" target="_blank">Crear</a></li>
                <li><a href="<?php echo $helper->url("Usuario", "admin"); ?>" target="_blank">Listar Usuarios</a></li>
                <li><a href="<?php echo $helper->url("Usuario", "crearUsuario"); ?>" target="_blank">CrearUsuarios</a></li>
            </ul>
        </div>

    </div>
    <div class="body">
        <div class="col-md-2">

            <ul class="list-group">

                <li class="list-group-item"><a href="<?php echo $helper->url("notificacionEmpresa", "crearNotificacionEmpresa"); ?>" target="_blank">Crear</a></li>
                <li class="list-group-item"><a href="#" target="_blank">Modificar</a></li>
            </ul>

        </div>

        <div class="col-lg-7">
            <h3>Notificacion Empresa</h3>
            <hr/>
        </div>
        <section class="col-lg-7 usuario" style="height:400px;overflow-y:scroll;">
            <table class="table table-striped">
                <thead>
                    <tr>
                       
                        <th>Dni usuario</th>
                        <th>Tipo de notificacion</th>
                        <th>Fecha registro</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <?php foreach ($allNot as $Not) { ?>
                    <tbody>
                        <tr>
                            <td><?php echo $Not->Dni_usuario;
                echo "<br>"; ?></td>
                            <td> <?php echo $Not->Tipo_notificacion;
                echo "<br>"; ?></td>
                            <td><?php echo $Not->fecha_registro;
                echo "<br>"; ?></td>
                            <td>
                                <div class="right">
                                    <a href="<?php echo $helper->url("NotificacionEmpresa", "viewNotificacionEmpresa"); ?>&Nit_empresa=<?php echo $Not->Nit_empresa; ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-search"></span></a>
                                    <a href="<?php echo $helper->url("NotificacionEmpresa", "modificarNotificacionEmpresa"); ?>&Nit_empresa=<?php echo $Not->Nit_empresa; ?>" class="btn btn-success"> <span class="glyphicon glyphicon-pencil"></span></a>
                                    <a class="btnEliminarItem btn btn-danger" id="Nit_empresa-<?php echo $emp->Nit_empresa; ?>" href="#" type="button"   data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a>
                                    <script type="text/javascript">
                                        urlDelete = "<?php echo $helper->url("NotificacionEmpresa", "borrarNotificacionEmpresa") . "&Nit_empresa=" ?>";
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

</div>

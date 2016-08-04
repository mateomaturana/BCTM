
<div class="container">


    <div class="row">

        <div class="body">

            <div class="col-md-3">

                <ul class="list-group">

                    <li class="list-group-item"><a href="#" target="_blank">Acciones</a></li>
                    <li class="list-group-item"><a href="#" target="_blank">Lista de Usuarios</a></li>
                </ul>

            </div>
        </div>

        <div class="col-md-8">
            <h3>Empresa</h3>
            <hr/>
        </div>
        <section class="col-lg-7 barrio" style="height:400px;overflow-y:scroll;">
            <?php
            if ($empresa) {
                echo "Nit de la empresa: ";
                echo $empresa->Nit_empresa;
                echo "<br>";
                echo "Nombre : ";
                echo $empresa->Nombre;
                echo "<br>";
                echo "Email del usuario: ";
                echo $empresa->Email;
                echo "<br>";
                echo "Direccion de la empresa ";
                echo $empresa->Direccion;
                echo "<br>";
                echo "Fecha registro";
                echo $empresa->fecha_registro;
                echo "<br>";
                echo "Contraseña: ";
                echo $empresa->Contrasenna;
                echo "<br>";
            }
            ?>
            <div class="right">
                <a href="<?php echo $helper->url("Empresa", "admin"); ?>&Nit_empresa=<?php echo $empresa->Nit_empresa; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a href="<?php echo $helper->url("Empresa", "modificarEmpresa"); ?>&Nit_empresa=<?php echo $empresa->Nit_empresa; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                                <a class="btnEliminarItem btn btn-danger" id="Nit_empresa-<?php echo $empresa->Nit_empresa; ?>" href="#" type="button"   data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a>
                  <script type="text/javascript">
                      urlDelete = "<?php echo $helper->url("Empresa","borrarEmpresa")."&Nit_empresa="?>";
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
                </div>            </div>
            <hr/>
        </section>
    </div>
</div>


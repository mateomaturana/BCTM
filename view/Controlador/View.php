<div class="container">
    <div class="row">
        <div class="col-md-12"></div>
        <ul class="breadcrumb">

            <li class="active"><a href="<?php echo $helper->url("Empresa", "crearEmpresa"); ?>" target="_blank">Crear Empresa</a></li>
            <li class="list-group-item"><a href="<?php echo $helper->url("Empresa", "admin"); ?>" target="_blank">Listar Empresa</a></li>

        </ul>

    </div>

    <div class="row">

        <div class="body">

            <div class="col-md-3">

                <ul class="list-group">

                    <li class="list-group-item"><a href="<?php echo $helper->url("Controlador", "admin"); ?>" target="_blank">Listar</a></li>

                </ul>

            </div>
        </div>

        <div class="col-md-8">
            <h3>Barrio</h3>
            <hr/>

            <section class="col-lg-7 barrio" style="height:400px;overflow-y:scroll;">
                <?php
                if ($Controlador) {
                    echo "Dni del controlador: ";
                    echo $Controlador->Dni_controlador;
                    echo "<br>";
                    echo "Nombre : ";
                    echo $Controlador->Nombre;
                    echo "<br>";
                    echo "Email : ";
                    echo $Controlador->Email;
                    echo "<br>";
                    echo "Telefono: ";
                    echo $Controlador->Telefono;
                    echo "<br>";
                    echo "Contraseña: ";
                    echo $Controlador->Contrasenna;
                    echo "<br>";
                    echo "Fecha de nacimiento: ";
                    echo $Controlador->Fecha_nacimiento;
                    echo "<br>";
                    echo "fk Nit empresa: ";
                    echo $Controlador->fk_nit_empresa;
                    echo "<br>";
                }
                ?>
                <div class="right">
                    <a href="<?php echo $helper->url("Controlador", "admin"); ?>&Dni_controlador=<?php echo $Controlador->Dni_controlador; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a href="<?php echo $helper->url("Controlador", "Comuna"); ?>&Dni_controlador=<?php echo $Controlador->Dni_controlador; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                   <a class="btnEliminarItem btn btn-danger" id="Dni_controlador-<?php echo $Controlador->Dni_controlador; ?>" href="#" type="button"   data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a>
                    <script type="text/javascript">
                        urlDelete = "<?php echo $helper->url("Controlador", "borrarControlador") . "&Dni_controlador=" ?>";
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
                    </div>                </div>
                <hr/>

            </section>
        </div>
    </div>
</div>

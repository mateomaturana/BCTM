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

                <li class="list-group-item"><a href="<?php echo $helper->url("notificacionEmpresa", "admin"); ?>" target="_blank">Listar</a></li>
                <li class="list-group-item"><a href="#" target="_blank">Modificar</a></li>
            </ul>

        </div>

        <div class="col-lg-7">
            <form action="<?php echo $helper->url("NotificacionEmpresa", "actualizarNotificacionEmpresa"); ?>" method="post" class="col-lg-5">

                <h3>Mdificar Empresa</h3>
                <hr/>
                <?php if ($notificacion_empresa) { ?>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#usuario > option[value="<?php echo $notificacion_empresa->Dni_usuario; ?>"]').attr('selected', 'selected');
                        });
                    </script>
                        <!--Nit Empresa: <input type="text" name="Nit_empresa" class="form-control" value="<//?php echo $notificacion_empresa->Nit_empresa;?>"/>-->
                        <!--Dni Usuario: <input type="text" name="Dni_usuario" class="form-control" value="<//?php echo $notificacion_empresa->Dni_usuario;?>"/>-->
                        <!--Fecha de registro: <input type="text" name="fecha_registro" class="form-control" value="<//?php echo $notificacion_empresa->fecha_registro;?>"/>-->
                    Comentario: <input type="text" name="Comentario" class="form-control" value="<?php echo $notificacion_empresa->Comentario; ?>"/>
                    Tipo de notificacion: <input type="text" name="Tipo_notificacion" class="form-control" value="<?php echo $notificacion_empresa->Tipo_notificacion; ?>"/>
                    Dni usuario: <select name="Dni_usuario" id="usuario" class="form-control"/><br>
                    <option value="">Seleccione una opcion</option>>
                    <?php
                    if ($usua != "") {

                        foreach ($usua as $us) {
                            echo "<option value='$us->Dni_usuario'>$us->Nombre</option>";
                        }
                    }
                    ?>
                    </select>
                    <input type="hidden" name="Nit_empresa" value="<?php echo $notificacion_empresa->Nit_empresa; ?>"/>
                    <input type="submit" value="modificar" class="btn btn-success"/>
                <?php } ?>

            </form>
        </div>
    </div>
</div>
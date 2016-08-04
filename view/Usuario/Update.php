
<script>
    $(function () {



        $("#fecha_nac").datepicker({
            dateFormat: "yy-mm-dd"

        });
    });

</script>
<div class="container">
    <div class="row">
        <div class="col-md-12"></div>
        <ul class="breadcrumb">

            <li class="active"><a href="<?php echo $helper->url("Barrios", "admin"); ?>" target="_blank">Listar Barrios</a></li>
            <li><a href="<?php echo $helper->url("Ruta", "admin"); ?>" target="_blank">Listar Rutas</a></li>
        </ul>

    </div>

    <div class="row">

        <div class="body">

            <div class="col-md-3">

                <ul class="list-group">

                    <li class="list-group-item"><a href="<?php echo $helper->url("Usuario", "crearBarrio"); ?>" target="_blank">Crear</a></li>

                </ul>

            </div>
            <div class="col-lg-7">

                <form action="<?php echo $helper->url("Usuario", "actualizarUsuario"); ?>" method="post" class="col-lg-5">

                    <h3>Mdificar Usuario</h3>
                    <hr/>
                    <?php if ($usuario) { ?>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $('#barrio > option[value="<?php echo $usuario->fk_id_barrio; ?>"]').attr('selected', 'selected');

                            });
                        </script>

                        Nombre: <input type="text" name="Nombre" class="form-control" value="<?php echo $usuario->Nombre; ?>"/>
                        Email : <input type="text" name="Email" class="form-control" value="<?php echo $usuario->Email; ?>"/>
                        Contraseña: <input type="text" name="Contrasenna" class="form-control" value="<?php echo $usuario->Contrasenna; ?>"/>
                        Fecha de nacimiento: <input type="text" name="Fecha_nacimiento" id="fecha_nac"class="form-control" value="<?php echo $usuario->Fecha_nacimiento; ?>"/>
                        Genero : <input type="text" name="genero" class="form-control" value="<?php echo $usuario->genero; ?>"/>

                        Id Barrio :  <select name="fk_id_barrio" id="barrio" class="form-control"/><br>
                        <option value="">Seleccione una opcion</option>>
                        <?php
                        if ($barrio != "") {

                            foreach ($barrio as $ba) {
                                echo "<option value='$ba->id_barrio'>$ba->Nombre</option>";
                            }
                        }
                        ?>
                        </select>
                        <input type="hidden" name="Dni_usuario" value="<?php echo $usuario->Dni_usuario; ?>"/>
                        <input type="submit" value="modificar" class="btn btn-success"/>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
</div>
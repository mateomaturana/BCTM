<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">

                <li class="active"><a href="<?php echo $helper->url("Usuario", "admin"); ?>" target="_blank">Listar Usuarios</a></li>
                <li><a href="<?php echo $helper->url("Usuario", "crearUsuario"); ?>" target="_blank">Crear Usuarios</a></li>
                <li><a href="#" target="_blank">Actualizar</a></li>
            </ul>
        </div>

    </div>

    <div class="row">

        <div class="body">

            <div class="col-md-3">

                <ul class="list-group">

                    <li class="list-group-item"><a href="<?php echo $helper->url("RecomendacionRuta", "admin"); ?>" target="_blank">Listar</a></li>
                    <li class="list-group-item"><a href="" target="_blank">Modificar </a></li>
                </ul>

            </div>
        </div>

        <div class="col-md-8">


            <form action="<?php echo $helper->url("RecomendacionRuta", "actualizarRecomendacionRuta"); ?>" method="post" class="col-lg-5">

                <h3>Modificar RecomendacionRuta</h3>
                <hr/>
                <?php if ($recomendacion_ruta) { ?>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#usuario > option[value="<?php echo $recomendacion_ruta->Dni_usuario; ?>"]').attr('selected', 'selected');
                        });
                    </script>
                        <!--Codigo de ruta: <input type="text" name="Cod_ruta" class="form-control" value="<//?php echo $recomendacion_ruta->Cod_ruta;?>"/>-->
                        <!--Dni de Usuario: <input type="text" name="Dni_usuario" class="form-control" value="<//?php echo $recomendacion_ruta->Dni_usuario;?>"/>-->
                        <!--Fecha de registro: <input type="text" name="fecha_registro" class="form-control" value="<//?php echo $recomendacion_ruta->fecha_registro;?>"/>-->
                    Recomendacion: <input type="text" name="Recomendacion" class="form-control" value="<?php echo $recomendacion_ruta->Recomendacion; ?>"/>
                    Tags: <input type="text" name="tags" class="form-control" value="<?php echo $recomendacion_ruta->tags; ?>"/>
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
                    <input type="hidden" name="Cod_ruta" value="<?php echo $recomendacion_ruta->Cod_ruta; ?>"/>
                    <input type="submit" value="modificar" class="btn btn-success"/>
                <?php } ?>
            </form>
        </div>
    </div>
</div>
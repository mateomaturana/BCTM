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
                    <li class="list-group-item"><a href="#" target="_blank">Modificar</a></li>
                </ul>

            </div>
        </div>

        <div class="col-md-8">
            <script>
                $(function () {



                    $("#fecha_nac").datepicker({
                        dateFormat: "yy-mm-dd"

                    });
                });

            </script>


            <form action="<?php echo $helper->url("Controlador", "actualizarControlador"); ?>" method="post" class="col-lg-5">

                <h3>Mdificar Controlador</h3>
                <hr/>
                <?php if ($controlador_empresa) { ?>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#empresa > option[value="<?php echo $controlador_empresa->fk_nit_empresa; ?>"]').attr('selected', 'selected');
                        });
                    </script>
                    Nombre: <input type="text" name="Nombre" class="form-control" value="<?php echo $controlador_empresa->Nombre; ?>"/>
                    Email: <input type="text" name="Email" class="form-control" value="<?php echo $controlador_empresa->Email; ?>"/>
                    Telefono: <input type="text" name="Telefono" class="form-control" value="<?php echo $controlador_empresa->Telefono; ?>"/>
                    Contraseña: <input type="password" name="Contrasenna" class="form-control" value="<?php echo $controlador_empresa->Contrasenna; ?>"/>
                    Fecha de Nacimiento: <input type="text" name="Fecha_nacimiento" id="fecha_nac" class="form-control" value="<?php echo $controlador_empresa->Fecha_nacimiento; ?>"/>
                    Nit empresa: <select name="fk_nit_empresa" id="empresa" class="form-control"/><br>
                    <option value="">Seleccione una opcion</option>>
                    <?php
                    if ($empres != "") {

                        foreach ($empres as $em) {
                            echo "<option value='$em->Nit_empresa'>$em->Nombre</option>";
                        }
                    }
                    ?>
                    </select>
                    <input type="hidden" name="Dni_controlador" value="<?php echo $controlador_empresa->Dni_controlador; ?>"/>
                    <input type="submit" value="modificar" class="btn btn-success"/>
                <?php } ?>
            </form>
        </div>
    </div>
</div>

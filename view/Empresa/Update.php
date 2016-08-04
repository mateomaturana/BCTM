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


            <form action="<?php echo $helper->url("Empresa", "actualizarEmpresa"); ?>" method="post" class="col-lg-5">

                <h3>Mdificar Empresa</h3>
                <hr/>
                <?php if ($empresa_transportadora) { ?>

             <!--Nit Empresa: <input type="text" name="Nit_empresa" class="form-control" value="<//?php echo $empresa_transportadora->Nit_empresa;?>"/>-->
                    Nombre: <input type="text" name="Nombre" class="form-control" value="<?php echo $empresa_transportadora->Nombre; ?>"/>
                    Email: <input type="text" name="Email" class="form-control" value="<?php echo $empresa_transportadora->Email; ?>"/>
                    Contraseña: <input type="password" name="Contrasenna" class="form-control" value="<?php echo $empresa_transportadora->Contrasenna; ?>"/>
                    Direccion: <input type="text" name="Direccion" class="form-control" value="<?php echo $empresa_transportadora->Direccion; ?>"/>
                    <!--Fecha de registro: <input type="text" name="fecha_registro" class="form-control" value="<//php echo $empresa_transportadora->fecha_registro;?>"/>-->
                    <input type="hidden" name="Nit_empresa" value="<?php echo $empresa_transportadora->Nit_empresa; ?>"/>
                    <input type="submit" value="modificar" class="btn btn-success"/>
                <?php } ?>
            </form>
        </div>
    </div>
</div>

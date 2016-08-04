

<div class="container">


    <div class="row">

        <div class="body">

            <div class="col-md-3">

                <ul class="list-group">

                    <li class="list-group-item"><a href="<?php echo $helper->url("comuna", "admin"); ?>" target="_blank">listar</a></li>
                    <li class="list-group-item"><a href="#" target="_blank">Modificar</a></li>
                </ul>

            </div>
        </div>

        <div class="col-md-8">
            <form action="<?php echo $helper->url("Comuna", "actualizarComuna"); ?>" method="post" class="col-lg-5">

                <h3>Mdificar Comuna</h3>
                <hr/>
                <?php if ($comuna) { ?>

                    Nombre: <input type="text" name="Nombre" class="form-control" value="<?php echo $comuna->Nombre; ?>"/>
                    <input type="hidden" name="id_comuna" value="<?php echo $comuna->id_comuna; ?>"/>
                    <input type="submit" value="modificar" class="btn btn-success"/>
                <?php } ?>
            </form>

        </div>
    </div>
</div>
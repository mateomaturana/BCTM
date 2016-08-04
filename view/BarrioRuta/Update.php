<div class="container">
    <div class="row">
        <div class="col-md-12"></div>
        <ul class="breadcrumb">

            <li class="active"><a href="<?php echo $helper->url("Barrio", "crearBarrio"); ?>" target="_blank">Crear Barrio</a></li>
            <li><a href="<?php echo $helper->url("Barrio", "admin"); ?>" target="_blank">Listar Barrio</a></li>
            <li><a href="<?php echo $helper->url("Ruta", "crearRuta"); ?>" target="_blank">Crear Ruta</a></li>
            <li><a href="<?php echo $helper->url("Ruta", "admin"); ?>" target="_blank">Listar Ruta</a></li>
        </ul>

    </div>

    <div class="row">

        <div class="body">

            <div class="col-md-3">

                <ul class="list-group">

                    <li class="list-group-item"><a href="<?php echo $helper->url("BarrioRuta", "admin"); ?>" target="_blank">Listar</a></li>

                </ul>

            </div>
        </div>

        <div class="col-md-8">
            <form action="<?php echo $helper->url("BarrioRuta", "actualizarBarrioRuta"); ?>" method="post" class="col-lg-5">

                <h3>Modificar BarrioRuta</h3>
                <hr/>
                <?php if ($barrioruta) { ?>

                    Codigo Ruta: <input type="text" name="Cod_ruta" class="form-control" value="<?php echo $barrioruta->Cod_ruta; ?>"/>
                    Id barrio: <input type="text" name="id_barrio" class="form-control" value="<?php echo $barrioruta->id_barrio; ?>"/>
                    <input type="hidden" name="Cod_ruta_Origen" value="<?php echo $barrioruta->Cod_ruta; ?>"/>
                    <input type="submit" value="modificar" class="btn btn-success"/>
                <?php } ?>
            </form>
        </div>
    </div>
</div>

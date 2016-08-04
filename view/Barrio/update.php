<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">

                <li class="active"><a href="<?php echo $helper->url("Comuna", "crearComuna"); ?>" target="_blank">Crear Comuna</a></li>
                <li><a href="<?php echo $helper->url("Comuna", "admin"); ?>" target="_blank">Listar Comunas</a></li>

            </ul>
        </div>

    </div>

    <div class="row">

        <div class="body">

            <div class="col-md-3">

                <ul class="list-group">

                    <li class="list-group-item"><a href="<?php echo $helper->url("barrio", "admin"); ?>" target="_blank">Consultar</a></li>
                    
                </ul>

            </div>
        </div>

        <div class="col-md-8">
            <form id="formID" action="<?php echo $helper->url("Barrio", "actualizarBarrio"); ?>" method="post" class="col-lg-5">

                <h3>Mdificar Barrio</h3>
                <hr/>
                <?php if ($barrio) { ?>

                    <input type="hidden" name="id_barrio" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[onlyNumberSp]] text-input"
                           value="<?php echo $barrio->id_barrio; ?>"/>
                    Nombre: <input type="text" name="Nombre" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[onlyLetterSp]] text-input"
                                   value="<?php echo $barrio->Nombre; ?>"/>
                    fk_id_comuna: <input type="text" name="Fk_id_comuna" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"
                                         value="<?php echo $barrio->fk_id_comuna; ?>"/>
                                                    <!--<input type="hidden" name="id_barrio" value="<5//?php echo $barrio->id_barrio;?>"/>-->
                    <input type="submit" value="modificar" class="btn btn-success"/>
                <?php } ?>
            </form>
        </div>
    </div>
</div>

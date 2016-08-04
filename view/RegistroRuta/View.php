
<div class="container">
    <div class="row">
        <div class="col-md-12"></div>
        <ul class="breadcrumb">

            <li class="active"><a href="<?php echo $helper->url("Ruta", "admin"); ?>" target="_blank">Listar Ruta</a></li>
            <li><a href="<?php echo $helper->url("Ruta", "crearRuta"); ?>" target="_blank">crear Ruta</a></li>
        </ul>

    </div>

    <div class="row">

        <div class="body">

            <div class="col-md-2">

                <ul class="list-group">

                    <li class="list-group-item"><a href="<?php echo $helper->url("RegistroRuta", "admin"); ?>" target="_blank">Listar Registro rutas</a></li>
                    
                </ul>

            </div>
        </div>
        <div class="col-lg-8">
            <h3>Registro Ruta</h3>
            <hr/>

            <section class="col-lg-7 barrio" style="height:400px;overflow-y:scroll;">
                <?php
                if ($RegistroRuta) {
                    echo "Codigo del Registro de la ruta: ";
                    echo $RegistroRuta->Codigo_registroRuta;
                    echo "<br>";
                    echo "Fecha salida : ";
                    echo $RegistroRuta->Fecha_salida;
                    echo "<br>";
                    echo "fecha llegada : ";
                    echo $RegistroRuta->Fecha_llegada;
                    echo "<br>";
                    echo "fk codigo de la ruta: ";
                    echo $RegistroRuta->fk_cod_ruta;
                    echo "<br>";
                    echo "fk id del vehiculo ";
                    echo $RegistroRuta->id_vehiculo;
                    echo "<br>";
                    echo "fkfk id del conductor ";
                    echo $RegistroRuta->fk_id_conductor;
                    echo "<br>";
                    echo "fk controlador empresa: ";
                    echo $RegistroRuta->fk_id_contEmpresa;
                    echo "<br>";
                }
                ?>
                <div class="right">
                    <a href="<?php echo $helper->url("RegistroRuta", "admin"); ?>&Codigo_registroRuta=<?php echo $RegistroRuta->Codigo_registroRuta; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a href="<?php echo $helper->url("RegistroRuta", "modificarRegistroRuta"); ?>&Codigo_registroRuta=<?php echo $RegistroRuta->Codigo_registroRuta; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="<?php echo $helper->url("RegistroRuta", "borrarRegistroRuta"); ?>&Codigo_registroRuta=<?php echo $RegistroRuta->Codigo_registroRuta; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                </div>
                <hr/>

            </section>
        </div>
    </div>
</div>
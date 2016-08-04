<div class="container">
    <div class="row">
        <div class="col-md-12"></div>
        <ul class="breadcrumb">

            <li class="active"><a href="<?php echo $helper->url("Empresa", "admin"); ?>" target="_blank">Listar Empresas</a></li>
            <li><a href="<?php echo $helper->url("Ruta", "admin"); ?>" target="_blank">Listar Rutas</a></li>
        </ul>

    </div>

    <div class="row">

        <div class="body">

            <div class="col-md-3">

                <ul class="list-group">

                    <li class="list-group-item"><a href="<?php echo $helper->url("RutaEmpresa", "admin"); ?>" target="_blank">Listar</a></li>
                    <li class="list-group-item"><a href="#" target="_blank">Modificar</a></li>
                </ul>

            </div>
        </div>

        <div class="col-md-8">
            <div class="col-lg-7">
                <h3>Ruta Empresa</h3>
                <hr/>
            </div>
            <section class="col-lg-7 barrio" style="height:400px;overflow-y:scroll;">
                <?php
                if ($RutaEmpresa) {
                    echo "Codigo de la ruta: ";
                    echo $RutaEmpresa->Cod_ruta;
                    echo "<br>";
                    echo "Nit de la empresa ";
                    echo $RutaEmpresa->Nit_empresa;
                    echo "<br>";
                    echo "Origen Barrio ";
                    echo $RutaEmpresa->Origen_barrio_id;
                    echo "<br>";
                    echo "Destino Barrio";
                    echo $RutaEmpresa->Destino_barrio_id;
                    echo "<br>";
                    echo "Duracion aproximada";
                    echo $RutaEmpresa->Duracion_aproximada;
                    echo "<br>";
                    echo "Hora inicio";
                    echo $RutaEmpresa->Hora_inicio;
                    echo "<br>";
                    echo "Hora fin";
                    echo $RutaEmpresa->Hora_fin;
                    echo "<br>";
                }
                ?>
                <div class="right">
                    <a href="<?php echo $helper->url("RutaEmpresa", "admin"); ?>&Cod_ruta=<?php echo $RutaEmpresa->Cod_ruta; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a href="<?php echo $helper->url("RutaEmpresa", "Comuna"); ?>&Cod_ruta=<?php echo $RutaEmpresa->Cod_ruta; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="<?php echo $helper->url("RutaEmpresa", "borrarRutaEmpresa"); ?>&Cod_ruta=<?php echo $RutaEmpresa->Cod_ruta; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                </div>
                <hr/>

            </section>
        </div>
    </div>
</div>
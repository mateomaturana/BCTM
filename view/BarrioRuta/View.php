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
            <h3>BarrioRuta</h3>
            <hr/>

            <section class="col-lg-7 barrio" style="height:400px;overflow-y:scroll;">
                <?php
                if ($barrioRuta) {
                    echo "Codigo de la ruta: ";
                    echo $barrioRuta->Cod_ruta;
                    echo "<br>";
                    echo "id Barrio ";
                    echo $barrioRuta->id_barrio;
                    echo "<br>";
                }
                ?>
                <div class="right">
                    <a href="<?php echo $helper->url("BarrioRuta", "admin"); ?>&Cod_ruta=<?php echo $barrioRuta->Cod_ruta; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a href="<?php echo $helper->url("BarrioRuta", "modificarBarrioRuta"); ?>&Cod_ruta=<?php echo $barrioRuta->Cod_ruta; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a class="btnEliminarItem btn btn-danger" id="Cod_ruta-<?php echo $barrioRuta->Cod_ruta; ?>" href="#" type="button"   data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a>
                  <script type="text/javascript">
                      urlDelete = "<?php echo $helper->url("BarrioRuta","borrarBarrioRuta")."&Cod_ruta="?>";
                  </script>  
 
       <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Eliminar</h4>
                            </div>
                            <div class="modal-body">
                                <p>¿Desea eliminar este registro? de ser asi se  eliminara el registros.</p>
                            </div>
                            <div class="modal-footer">
                                <a id="btnEliminar"><button type="button" class="btn btn-access" >Eliminar</button></a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>

                            </div>
                        </div>
                    </div>
                </div>                </div>
                <hr/>

            </section>
        </div>
    </div>
</div>

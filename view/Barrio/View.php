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
            <h3>Barrio</h3>
            <hr/>

            <section class="col-lg-7 barrio" style="height:400px;overflow-y:scroll;">
                <?php
                if ($barrio) {
                    echo "Id del barrio: ";
                    echo $barrio->id_barrio;
                    echo "<br>";
                    echo "Nombre del barrio:";
                    echo $barrio->Nombre;
                    echo "<br>";
                    echo "Id de la comuna:";
                    echo $barrio->fk_id_comuna;
                    echo "<br>";
                }
                ?>
                <div class="right">
                    <a href="<?php echo $helper->url("barrio", "admin"); ?>&id_barrio=<?php echo $barrio->id_barrio; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a href="<?php echo $helper->url("barrio", "modificarBarrio"); ?>&id_barrio=<?php echo $barrio->id_barrio; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                     <a class="btnEliminarItem btn btn-danger" id="id_barrio-<?php echo $barrio->id_barrio; ?>" href="#" type="button"   data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a>
                    <script type="text/javascript">
                        urlDelete = "<?php echo $helper->url("barrio", "borrarBarrio") . "&id_barrio=" ?>";
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
                    </div>          </div>

                <hr/>

            </section>
        </div>
    </div>
</div>


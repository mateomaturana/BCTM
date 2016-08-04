<div class="container">


    <div class="row">

        <div class="body">

            <div class="col-md-3">

                <ul class="list-group">

                    <li class="list-group-item"><a href="<?php echo $helper->url("comuna", "admin"); ?>" target="_blank">listar</a></li>

                </ul>

            </div>
        </div>

        <div class="col-md-8">
            <h3>Comuna</h3>
            <hr/>
        </div>
        <section class="col-lg-7 usuario" style="height:400px;overflow-y:scroll;">
            <?php
            if ($Comuna) {

                echo "Id de la comuna: ";
                echo $Comuna->id_comuna;
                echo "<br>";
                echo "Nombre de la comuna:";
                echo $Comuna->Nombre;
                echo "<br>";
            }
            ?>
            <div class="right">
                <a href="<?php echo $helper->url("comuna", "admin"); ?>&id_comuna=<?php echo $Comuna->id_comuna; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a href="<?php echo $helper->url("comuna", "modificarComuna"); ?>&id_comuna=<?php echo $Comuna->id_comuna; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                                <a class="btnEliminarItem btn btn-danger" id="id_comuna-<?php echo $Comuna->id_comuna; ?>" href="#" type="button"   data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a>
                  <script type="text/javascript">
                      urlDelete = "<?php echo $helper->url("comuna","borrarComuna")."&id_comuna="?>";
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
                </div>            </div>
            <hr/>

        </section>
    </div>
</div>





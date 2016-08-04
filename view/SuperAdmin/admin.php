<div class="container">


    <div class="row">

        <div class="body">

            <div class="col-md-2">

                <ul class="list-group">

                    <li class="list-group-item"><a href="<?php echo $helper->url("SuperAdmin", "admin"); ?>" target="_blank">Listar</a></li>
                    <li class="list-group-item"><a href="#" target="_blank">Modificar</a></li>
                </ul>

            </div>
        </div>

        </head>
        <body>

            <div class="col-lg-7">
                <h3>SuperAdmin</h3>
                <hr/>
            </div>
            <section class="col-lg-9 usuario" style="height:400px;overflow-y:scroll;">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Dni del Admin</th>
                            <th>Nombre del admin</th>
                            <th>Email del Admin</th>
                            
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <?php foreach ($allSup as $usu) { ?>
                        <tbody>
                            <tr>
                                <td> <?php echo $usu->Dni_SuperAdmin;
                    echo "<br>"; ?></td>
                                <td>  <?php echo $usu->Nombre;
                    echo "<br>"; ?></td>
                                <td>  <?php echo $usu->Email;
                    echo "<br>"; ?></td>
                                
                                <td>
                                    <div class="right">
                                        <a href="<?php echo $helper->url("SuperAdmin", "viewSuperAdmin"); ?>&Dni_SuperAdmin=<?php echo $usu->Dni_SuperAdmin; ?>" class="btn btn-primary"> <span class="glyphicon glyphicon-search"></span></a>
                                        <a href="<?php echo $helper->url("SuperAdmin", "modificarSuperAdmin"); ?>&Dni_SuperAdmin=<?php echo $usu->Dni_SuperAdmin; ?>" class="btn btn-success"> <span class="glyphicon glyphicon-pencil"></span></a>
                                        <a class="btnEliminarItem btn btn-danger" id="Dni_SuperAdmin-<?php echo $usu->Dni_SuperAdmin; ?>" href="#" type="button"   data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-trash"></span> </a>
                                        <script type="text/javascript">
                                            urlDelete = "<?php echo $helper->url("SuperAdmin", "borrarSuperAdmin") . "&Dni_SuperAdmin=" ?>";
                                        </script>  
                                </td>
                            </tr>
<?php } ?>
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
                    </div></td>
                    </tr>
                    </tbody>
                </table>






    </div>
    <hr/>

</section>

    </div>

<div class="container">


<div class="row">

    <div class="body">

        <div class="col-md-3">

            <ul class="list-group">

                <li class="list-group-item"><a href="<?php echo $helper->url("SuperAdmin", "admin"); ?>" target="_blank">Listar</a></li>
                
            </ul>

        </div>
    </div>
            <h3>SuperAdmin</h3>
            <hr/>
        </div>
        <section class="col-lg-7 barrio" style="height:400px;overflow-y:scroll;">
            <?php  
            if($SuperAdmin){
           echo "Dni del Admin: "; echo $SuperAdmin->Dni_SuperAdmin; echo "<br>";
          echo "Nombre del admin: ";      echo $SuperAdmin->Nombre; echo "<br>";
          echo "Email del Admin: ";      echo $SuperAdmin->Email; echo "<br>";
          echo "Contraseña del Admin: ";      echo $SuperAdmin->Contrasenna; echo "<br>";
           echo "Telefono del Admin: ";      echo $SuperAdmin->telefono; echo "<br>";
          echo "Fecha de nacimiento: ";      echo $SuperAdmin->Fecha_nacimiento; echo "<br>";
            }
            ?>
          <div class="right">
                    <a href="<?php echo $helper->url("SuperAdmin","admin"); ?>&Dni_SuperAdmin=<?php echo $SuperAdmin->Dni_SuperAdmin; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a href="<?php echo $helper->url("SuperAdmin","modificarSuperAdmin"); ?>&Dni_SuperAdmin=<?php echo $SuperAdmin->Dni_SuperAdmin; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="<?php echo $helper->url("SuperAdmin","borrarSuperAdmin"); ?>&Dni_SuperAdmin=<?php echo $SuperAdmin->Dni_SuperAdmin; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
          </div>
                <hr/>
                 
        </section>
    </body>
</html>
 


        
         <div class="container">
    <div class="row">
    	<div class="col-md-12"></div>
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="<?php echo $helper->url("Barrios","admin"); ?>" target="_blank">Listar Barrios</a></li>
                    <li><a href="<?php echo $helper->url("Ruta","admin"); ?>" target="_blank">Listar Rutas</a></li>
                    </ul>

    </div>
   
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-3">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("Usuario","crearBarrio"); ?>" target="_blank">Crear</a></li>
                    
                    </ul>
                    
  </div>
          <div class="col-lg-7">
            <h3>Usuario</h3>
            <hr/>
        </div>
        <section class="col-lg-7 barrio" style="height:400px;overflow-y:scroll;">
            <?php  
            if($Usuario){
            echo "Dni del usuario: "; echo $Usuario->Dni_usuario; echo "<br>";
          echo "Nombre del usuario: ";      echo $Usuario->Nombre; echo "<br>";
          echo "Email del usuario: ";      echo $Usuario->Email; echo "<br>";
          echo "Contraseña del usuario: ";      echo $Usuario->Contrasenna; echo "<br>";
          echo "Fecha de nacimiento: ";      echo $Usuario->Fecha_nacimiento; echo "<br>";
          echo "genero: ";      echo $Usuario->genero; echo "<br>";
          echo "fk id del barrio: ";      echo $Usuario->fk_id_barrio; echo "<br>";
            }
            ?>
          <div class="right">
                    <a href="<?php echo $helper->url("Usuario","admin"); ?>&Dni_usuario=<?php echo $Usuario->Dni_usuario; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a href="<?php echo $helper->url("Usuario","modificarUsuario"); ?>&Dni_usuario=<?php echo $Usuario->Dni_usuario; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="<?php echo $helper->url("Usuario","borrarUsuario"); ?>&Dni_usuario=<?php echo $Usuario->Dni_usuario; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
          </div>
                <hr/>
                 
        </section>
    </body>
</html>
 

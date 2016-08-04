
       
        <div class="container">
    <div class="row">
    	<div class="col-md-12"></div>
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="#" target="_blank">usuario</a></li>
                    <li><a href="#" target="_blank">1</a></li>
                    <li><a href="#" target="_blank">Actualizar</a></li>
                    </ul>

    </div>
        <div class="body">
        <div class="col-md-2">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="#" target="_blank">Acciones</a></li>
                    <li class="list-group-item"><a href="#" target="_blank">Lista de Usuarios</a></li>
                    </ul>
                    
  </div>
          <div class="col-lg-7">
            <h3>Admin</h3>
            <hr/>
        </div>
        <section class="col-lg-7 usuario" style="height:400px;overflow-y:scroll;">
            <?php  
            foreach($allusrut as $usrut) {
                
                echo "<hr>";
          echo "Codigo de la ruta  "; echo $usrut->Cod_ruta; echo "<br>";
          echo "Dni usuario ";      echo $usrut->Dni_usuario; echo "<br>";
          echo "Fecha registro";      echo $usrut->fecha_registro; echo "<br>";
          

                
              
               echo "<hr>";
                
            } ?>
        </section>
    </body>
</html>

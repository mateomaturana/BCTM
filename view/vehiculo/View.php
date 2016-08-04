<div class="container">
    <div class="row">
    	<div class="col-md-12"></div>
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="<?php echo $helper->url("Empresa","admin"); ?>" target="_blank">Listar Empresa</a></li>
                    
                    </ul>

    </div>
   
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-3">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("vehiculo","admin"); ?>" target="_blank">Listar</a></li>
                    
                    </ul>
                    
  </div>
        
          <div class="col-lg-7">
            <h3>Vehiculo</h3>
            <hr/>
        </div>
        <section class="col-lg-7 barrio" style="height:400px;overflow-y:scroll;">
            <?php  
            if($Vehiculo){
           echo "id del vehiculo: "; echo $Vehiculo->id_vehiculo; echo "<br>";
          echo "placa : ";      echo $Vehiculo->Placa_vehiculo; echo "<br>";
          echo "Activo";      echo $Vehiculo->Activo; echo "<br>";
          echo "Tipo del vehiculo ";      echo $Vehiculo->Tipo_vehiculo; echo "<br>";
          echo "cupo del vehiculo";      echo $Vehiculo->cupo_vehiculo; echo "<br>";
          echo "fk Nit de la empresa: ";      echo $Vehiculo->fk_nit_empresa; echo "<br>";
            }
            ?>
          <div class="right">
                    <a href="<?php echo $helper->url("Vehiculo","admin"); ?>&id_vehiculo=<?php echo $id_vehiculo->id_vehiculo; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a href="<?php echo $helper->url("Vehiculo","modificarVehiculo"); ?>&id_vehiculo=<?php echo $id_vehiculo->id_vehiculo; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="<?php echo $helper->url("Vehiculo","borrarVehiculo"); ?>&id_vehiculo=<?php echo $id_vehiculo->id_vehiculo; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
          </div>
                <hr/>
                 
        </section>
        </div>
        </div>
</div>
 


          <div class="container">
    <div class="row">
    	<div class="col-md-12"></div>
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="<?php echo $helper->url("Barrio","admin"); ?>" target="_blank">Listar Barrios</a></li>
                    <li><a href="<?php echo $helper->url("Barrio","crearBarrio"); ?>" target="_blank">Crear Barrios</a></li>
                    </ul>

    </div>
    
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-2">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("Ruta","admin"); ?>" target="_blank">Listar</a></li>
                    <li class="list-group-item"><a href="#" target="_blank">Modificar</a></li>
                    </ul>
                    
  </div>
        </div>
    
    <div class="col-md-10">
            <h3>Ruta</h3>
            <hr/>
        </div>
        <section class="col-lg-7 barrio" style="height:400px;overflow-y:scroll;">
            <?php  
            if($Ruta){
           echo "Codigo de la ruta: "; echo $Ruta->Cod_ruta; echo "<br>";
          echo "Origen Barrio ";      echo $Ruta->Origen_barrio_id; echo "<br>";
          echo "Destino Barrio";      echo $Ruta->Destino_barrio_id; echo "<br>";
            }
            ?>
          <div class="right">
                    <a href="<?php echo $helper->url("Ruta","admin"); ?>&Cod_ruta=<?php echo $Ruta->Cod_ruta; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a href="<?php echo $helper->url("Ruta","modisicarRuta"); ?>&Cod_ruta=<?php echo $Ruta->Cod_ruta; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="<?php echo $helper->url("Ruta","borrarRuta"); ?>&Cod_ruta=<?php echo $Ruta->Cod_ruta; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
          </div>
                <hr/>
                 
        </section>

 

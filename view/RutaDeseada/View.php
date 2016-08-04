<div class="container">
    <div class="row">
    	<div class="col-md-12">
    	<ul class="breadcrumb">
                    
                    <li><a href="<?php echo $helper->url("barrio","crearBarrio"); ?>" target="_blank">Crear Barrio</a></li>
                    <li><a href="<?php echo $helper->url("barrio","admin"); ?>" target="_blank">Consultar Barrio</a></li>
                    </ul>
</div>
    </div>
    
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-3">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("RutaDeseada","admin"); ?>" target="_blank">Consultar</a></li>
                    <li class="list-group-item"><a href="#" target="_blank">Modificar</a></li>
                    </ul>
                    
  </div>
        </div>
    
    <div class="col-md-8">
        
          <div class="col-lg-7">
            <h3>Ruta Deseada</h3>
            <hr/>
        </div>
        <section class="col-lg-7 barrio" style="height:400px;overflow-y:scroll;">
            <?php  
            if($RtaDeseada){
           echo "Codigo de la ruta deseadas: "; echo $RtaDeseada->Cod_rutDeseada; echo "<br>";
          echo "Origen Barrio ";      echo $RtaDeseada->Origen_barrio_id; echo "<br>";
          echo "Destino Barrio ";      echo $RtaDeseada->Destino_barrio_id; echo "<br>";
          echo "hora inicio ";      echo $RtaDeseada->hora_inicio; echo "<br>";
          echo "Hora fin ";      echo $RtaDeseada->hora_fin; echo "<br>";
            }
            ?>
          <div class="right">
                    <a href="<?php echo $helper->url("RutaDeseada","admin"); ?>&Cod_rutDeseada=<?php echo $RtaDeseada->Cod_rutDeseada; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a href="<?php echo $helper->url("RutaDeseada","modificarRutaDeseada"); ?>&Cod_rutDeseada=<?php echo $RtaDeseada->Cod_rutDeseada; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="<?php echo $helper->url("RutaDeseada","borrarRutaDeseada"); ?>&Cod_rutDeseada=<?php echo $RtaDeseada->Cod_rutDeseada; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
          </div>
                <hr/>
                 
        </section>
    </div>
        </div>
</div>

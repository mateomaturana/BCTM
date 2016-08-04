
 
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
        <form id="formID" action="<?php echo $helper->url("Rutadeseada","crearRutaDeseada"); ?>" method="post" class="col-lg-5">
            <h3>Añadir RutaDeseada</h3>
            <hr/>
            

                Origen barrio: <br> <select name="FkOrBarrio" id="FkOrBarrio" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
                <option value="">Seleccione un Barrio</option>
                <?php
                if($allFkbarrio != ""){
                    foreach ($allFkbarrio as $item){
                        echo "<option value='$item->id_barrio'>$item->Nombre</option>";
                    }
                
                }
                ?></select><br>

                Destino Barrio:<br> <select name="FkDesBarrio" id="FkDeBarrio" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
                <option value="">Seleccione un Barrio</option>
                <?php
                if($allFkbarrio != ""){
                    foreach ($allFkbarrio as $item){
                        echo "<option value='$item->id_barrio'>$item->Nombre</option>";
                    }
                
                }
                ?></select><br>

                Hora inicio:<input type="text" name="HoraIni" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"
/>
                Hora fin:<input type="text" name="HoraFin" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"
/>

             <input type="submit" value="Crear" class="btn btn-success"/>
             </div>
            </div>
        </div>
        </form>
    </div>

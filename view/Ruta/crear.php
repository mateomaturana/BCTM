
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
        <form id="formID" action="<?php echo $helper->url("Ruta","crearRuta"); ?>" method="post" class="col-lg-5">
            <h3>Añadir Ruta</h3>
            <hr/>
            Codigo de la Ruta: <input type="text" name="CodRuta" data-validation-placeholder="Campo obligatorio" class="form-control validate[required,custom[onlyNumberSp] text-input">

                Origen barrio: <br> <select name="FkOrBarrio" id="FkBarrio" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
                <option value="">Seleccione un Barrio</option>
                <?php
                if($allFkbarrio != ""){
                    foreach ($allFkbarrio as $item){
                        echo "<option value='$item->id_barrio'>$item->Nombre</option>";
                    }
                
                }
                ?></select><br>

                Destino Barrio:<br> <select name="FkDesBarrio" id="FkBarrio" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
                <option value="">Seleccione un Barrio</option>
                <?php
                if($allFkbarrio != ""){
                    foreach ($allFkbarrio as $item){
                        echo "<option value='$item->id_barrio'>$item->Nombre</option>";
                    }
                
                }
                ?></select><br>


             <input type="submit" value="Crear" class="btn btn-success"/>
             </div>
            </div>
        </div>
        </form>
    </div>
</body>
</html>




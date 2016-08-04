
     <div class="container">
    <div class="row">
    	<div class="col-md-12"></div>
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="<?php  echo $helper->url("Barrio","crearBarrio"); ?>" target="_blank">Crear Barrio</a></li>
                    <li><a href="<?php  echo $helper->url("Barrio","admin"); ?>" target="_blank">Listar Barrio</a></li>
                    <li><a href="<?php  echo $helper->url("Ruta","crearRuta"); ?>" target="_blank">Crear Ruta</a></li>
                    <li><a href="<?php  echo $helper->url("Ruta","admin"); ?>" target="_blank">Listar Ruta</a></li>
                    </ul>

    </div>
    
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-3">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php  echo $helper->url("BarrioRuta","admin"); ?>" target="_blank">Listar</a></li>
                    
                    </ul>
                    
  </div>
        </div>
    
    <div class="col-md-8">
<form id="formID" action="<?php  echo $helper->url("BarrioRuta","crearBarrioRuta"); ?>" method="post" class="col-lg-5">
            <h3>Añadir BarrioRuta</h3>
            
            <hr/>
            Codigo de la Ruta: <br> <select name="fk_cod_ruta" id="ruta" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
                <option value="">Seleccione una ruta</option>
                <?php
                if($allFkruta != ""){
                    foreach ($allFkruta as $item){
                        echo "<option value='$item->Cod_ruta'>$item->Cod_ruta</option>";
                    }
                
                }
                ?>
            </select><br>
            id barrio:  <br> <select name="fk_id_barrio" id="barrio" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
                <option value="">Seleccione un barrio</option>
                <?php
                if($allFkbarrio != ""){
                    foreach ($allFkbarrio as $item){
                        echo "<option value='$item->id_barrio'>$item->Nombre</option>";
                    }
                
                }
                ?>
            </select><br>
                

             <input type="submit" value="Crear" class="btn btn-success"/>
             
        </form>
        </div>
            </div>
         </div>


    <div class="container">
    <div class="row">
    	<div class="col-md-12">
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="<?php echo $helper->url("Comuna","crearComuna"); ?>" target="_blank">Crear Comuna</a></li>
                    <li><a href="<?php echo $helper->url("Comuna","admin"); ?>" target="_blank">Listar Comunas</a></li>
                    
                    </ul>
            </div>

    </div>
    
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-3">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("barrio","admin"); ?>" target="_blank">Consultar</a></li>
                    
                    </ul>
                    
  </div>
        </div>
    
    <div class="col-md-8">
<form id="formID" action="<?php echo $helper->url("barrio","crearBarrio"); ?>" method="post" class="col-lg-5">
            <h3>Añadir Barrio</h3>
            <hr/>
            Nombre <input type="text" name="nombre" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[onlyLetterSp]] text-input"/>
            Comuna:<br>
            <select name="fk_id_comuna" id="comuna" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"

                <option value="">Seleccione una Comuna</option>
                <?php
                if($allFkcomuna != ""){
                    foreach ($allFkcomuna as $item){
                        echo "<option value='$item->id_comuna'>$item->Nombre</option>";
                    }
                
                }
                ?>
            </select><br>
            <input type="submit" value="Crear" class="btn btn-success"/>
    </div>
            
        </div>
        </form>
        </div>


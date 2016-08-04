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
<form id="formID" action="<?php echo $helper->url("vehiculo","crearVehiculo"); ?>" method="post" class="col-lg-5">
            <h3>Añadir Vehiculo</h3>
            <hr/>
             placa: <input type="text" name="Placa" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"
/>
             Activo:<input type="text" name="Activo" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"
/>
             Tipo vehiculo: <input type="text" name="Tipo" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[onlyLetterSp]] text-input"

/>
             Cupo del vehiculo: <input type="text" name="cupo" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[onlyNumberSp]] text-input"

/>
             fk nit de la empresa<br> <select name="FkNitEmpresa" id="FkNitEmpresa" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
                <option value="">Seleccione una Empresa</option>
                <?php
                if($allFkempresa != ""){
                    foreach ($allFkempresa as $item){
                        echo "<option value='$item->Nit_empresa'>$item->Nombre</option>";
                    }
                
                }
                ?>
             <input type="submit" value="Crear" class="btn btn-success"/>
             
        </form>
        </div>


<script>
    $(function () {

        $("#fechareg").datepicker({
            dateFormat: "yy-mm-dd"


        });
        $("#fechareg1").datepicker({
            dateFormat: "yy-mm-dd"


        });
    });

      
</script>
    <div class="container">
    <div class="row">
    	<div class="col-md-12"></div>
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="<?php echo $helper->url("Ruta","admin"); ?>" target="_blank">Listar Ruta</a></li>
                    <li><a href="<?php echo $helper->url("Ruta","crearRuta"); ?>" target="_blank">crear Ruta</a></li>
                    </ul>

    </div>
    
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-2">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("RegistroRuta","admin"); ?>" target="_blank">Listar Registro rutas</a></li>
                    <li class="list-group-item"><a href="#" target="_blank">Modificar</a></li>
                    </ul>
                    
  </div>
        </div>
    
    <div class="col-md-8">
<form  id="formID" action="<?php echo $helper->url("RegistroRuta","crearRegistroRuta"); ?>" method="post" class="col-lg-5">
            <h3>Registro Ruta</h3>
            <hr/>
            
            Fecha salida <input type="text" name="Fechasal" id="fechareg"  data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"
/>
             Fecha llegada <input type="text" name="FechaLleg" id="fechareg1"  data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"
/>
             fk codigo de la ruta <br> <select name="FkCodRuta" id="FkNitusuario" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
                <option value="">Seleccione una ruta</option>
                <?php
                if($allFkruta != ""){
                    foreach ($allFkruta as $item){
                        echo "<option value='$item->Cod_ruta'>$item->Cod_ruta</option>";
                    }
                
                }
                ?></select><br>

             fk id del vehiculo <br> <select name="FkVehiculo" id="FkNitusuario" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
                <option value="">Seleccione una ruta</option>
                <?php
                if($allFkvehiculo != ""){
                    foreach ($allFkvehiculo as $item){
                        echo "<option value='$item->id_vehiculo'>$item->Placa_vehiculo</option>";
                    }
                
                }
                ?></select><br>

             fk id del conductor <br> <select name="FkDniConductor" id="FkNitconductor" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
                <option value="">Seleccione un conductor</option>
                <?php
                if($allFkconductor != ""){
                    foreach ($allFkconductor as $item){
                        echo "<option value='$item->Dni_conductor'>$item->Nombre</option>";
                    }
                
                }
                ?></select><br>

             Fk id del controlador <br> <select name="FkControlador" id="FkNitcontrolador" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
                <option value="">Seleccione un controlador</option>
                <?php
                if($allFkcontrolador != ""){
                    foreach ($allFkcontrolador as $item){
                        echo "<option value='$item->Dni_controlador'>$item->Nombre</option>";
                    }
                
                }
                ?></select><br>

             <input type="submit" value="Crear" class="btn btn-success"/>
             
        </form>
    </div>
</div>
        </div>



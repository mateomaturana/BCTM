
    <div class="container">
    <div class="row">
    	<div class="col-md-12"></div>
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="<?php echo $helper->url("Empresa","admin"); ?>" target="_blank">Listar Empresas</a></li>
                    <li><a href="<?php echo $helper->url("Ruta","admin"); ?>" target="_blank">Listar Rutas</a></li>
                    </ul>

    </div>
   
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-3">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("RutaEmpresa","admin"); ?>" target="_blank">Listar</a></li>
                    <li class="list-group-item"><a href="#" target="_blank">Modificar</a></li>
                    </ul>
                    
  </div>
        </div>
    
    <div class="col-md-8">
<form id="formID" action="<?php echo $helper->url("RutaEmpresa","crearRutaEmpresa"); ?>" method="post" class="col-lg-5">
            <h3>Añadir Ruta empresa</h3>
            <hr/>
            Codigo de la Ruta: <br> <select name="FkRuta" id="FkRuta" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
                <option value="">Seleccione una ruta</option>
                <?php
                if($allFkruta != ""){
                    foreach ($allFkruta as $item){
                        echo "<option value='$item->Cod_ruta'>$item->Cod_ruta</option>";
                    }
                
                }
                ?></select><br>
                Nit de la empresa: <br> <select name="FkNitEmpresa" id="FkNitEmpresa" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
                <option value="">Seleccione una Empresa</option>
                <?php
                if($allFkempresa != ""){
                    foreach ($allFkempresa as $item){
                        echo "<option value='$item->Nit_empresa'>$item->Nombre</option>";
                    }
                
                }
                ?></select><br>

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

                Duracion Aproximada:<input type="text" name="DuracionAprox" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"
/>
                Hora Inicio:<input type="text" name="HoraIni" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"
/>
                Hora Fin:<input type="text" name="HoraFin" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"
/>
                

             <input type="submit" value="Crear" class="btn btn-success"/>
             
        </form>
    </div>
 </div>
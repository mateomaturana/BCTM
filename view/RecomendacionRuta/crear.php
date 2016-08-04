
    <div class="container">
    <div class="row">
    	<div class="col-md-12">
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="<?php echo $helper->url("Usuario","admin"); ?>" target="_blank">Listar Usuarios</a></li>
                    <li><a href="<?php echo $helper->url("Usuario","crearUsuario"); ?>" target="_blank">Crear Usuarios</a></li>
                    <li><a href="#" target="_blank">Actualizar</a></li>
                    </ul>
            </div>

    </div>
   
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-3">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("RecomendacionRuta","admin"); ?>" target="_blank">Listar</a></li>
                    <li class="list-group-item"><a href="" target="_blank">Modificar </a></li>
                    </ul>
                    
  </div>
        </div>
    
    <div class="col-md-8">
        <form id="formID" action="<?php echo $helper->url("RecomendacionRuta","crearRecomendacionRuta"); ?>" method="post" class="col-lg-5">
            <h3>Añadir RecomendacionRuta</h3>
            <hr/>
            Codigo de la Ruta deseada: <br> <select name="FkCodRuta" id="FkNitusuario" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
                <option value="">Seleccione una ruta</option>
                <?php
                if($allFkruta != ""){
                    foreach ($allFkruta as $item){
                        echo "<option value='$item->Cod_ruta'>$item->Cod_ruta</option>";
                    }
                
                }
                ?></select><br>
                Dni del usuario: <br> <select name="FkNitusuario" id="FkNitusuario" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
                <option value="">Seleccione un Usuario</option>
                <?php
                if($allFkusuario != ""){
                    foreach ($allFkusuario as $item){
                        echo "<option value='$item->Dni_usuario'>$item->Nombre</option>";
                    }
                
                }
                ?></select><br>
                Recomendacion:  <input type="textarea" name="Recomendacion" class="form-control"/>
                Tags: <input type="text" name="Tags" class="form-control"/>
                <br>
                
             <input type="submit" value="Crear" class="btn btn-success"/>
             
        </form>
    </div>
             </div>
         </div>
 



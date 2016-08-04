

    <div class="container">
    <div class="row">
    	<div class="col-md-12"></div>
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="#" target="_blank">usuario</a></li>
                    <li><a href="#" target="_blank">1</a></li>
                    <li><a href="#" target="_blank">Actualizar</a></li>
                    </ul>

    </div>
    </div>
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-3">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="#" target="_blank">Acciones</a></li>
                    <li class="list-group-item"><a href="#" target="_blank">Lista de Usuarios</a></li>
                    </ul>
                    
  </div>
        </div>
    
    <div class="col-md-8">
<form id="formID" action="<?php echo $helper->url("UsuarioRuta","crearUsuarioRuta"); ?>" method="post" class="col-lg-5">
            <h3>Añadir UsuarioRuta</h3>
            <hr/>
            Codigo de la Ruta: <br> <select name="FkCodRuta" id="FkNitusuario" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
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
                
             <input type="submit" value="Crear" class="btn btn-success"/>
             
        </form>
    </div>
</body>
</html>

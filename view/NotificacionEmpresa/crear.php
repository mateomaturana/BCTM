

    <div class="container">
    <div class="row">
    	<div class="col-md-12">
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="<?php echo $helper->url("Empresa","admin"); ?>" target="_blank">Listar Empresa</a></li>
                    <li><a href="<?php echo $helper->url("Empresa","crearEmpresa"); ?>" target="_blank">Crear</a></li>
                    <li><a href="<?php echo $helper->url("Usuario","admin"); ?>" target="_blank">Listar Usuarios</a></li>
                    <li><a href="<?php echo $helper->url("Usuario","crearUsuario"); ?>" target="_blank">CrearUsuarios</a></li>
                    </ul>
            </div>

    </div>
        <div class="body">
        <div class="col-md-2">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("notificacionEmpresa","admin"); ?>" target="_blank">Listar</a></li>
                    <li class="list-group-item"><a href="#" target="_blank">Modificar</a></li>
                    </ul>
                    
  </div>
<form id="formID" action="<?php echo $helper->url("notificacionEmpresa","crearNotificacionEmpresa"); ?>" method="post" class="col-lg-5">
            <h3>Añadir NotificacionEmpresa</h3>
            <hr/>
            Nit Empresa:   <br> <select name="FkNitEmpresa" id="FkNitEmpresa" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
                <option value="">Seleccione una Empresa</option>
                <?php
                if($allFkempresa != ""){
                    foreach ($allFkempresa as $item){
                        echo "<option value='$item->Nit_empresa'>$item->Nombre</option>";
                    }
                
                }
                ?>
            </select><br>
                Dni del usuario: <br> <select name="FkNitusuario" id="FkNitusuario" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
                <option value="">Seleccione un Usuario</option>
                <?php
                if($allFkusuario != ""){
                    foreach ($allFkusuario as $item){
                        echo "<option value='$item->Dni_usuario'>$item->Nombre</option>";
                    }
                
                }
                ?></select><br>
                Comentario: <input type="textarea" name="Comentario"  data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"/>
                Tipo: <input type="text" name="tipo"  data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"/>
                
        
             <input type="submit" value="Crear" class="btn btn-success"/>
             </div>
        </div>
        </form>



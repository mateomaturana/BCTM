
    <div class="container">
   
    
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
        <form id="formID" action="<?php echo $helper->url("empresa","crearEmpresa"); ?>" method="post" class="col-lg-5">
            <h3>Añadir Empresa</h3>
            <hr/>
            Nit de la Empresa: <input type="text" name="Dni" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[onlyNumberSp]] text-input"/>
             Nombre: <input type="text" name="nombre" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[onlyLetterSp]] text-input"/>
             Email <input type="text" name="Email" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[email]] text-input "
/>
             Contraseña: <input type="text" name="Contrasenna" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, minSize[8]] text-input"
/>
             Direccion <input type="text" name="Direccion" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"/>
             <input type="submit" value="Crear" class="btn btn-success"/>
             
        </form>
    </div>
</div>
        </div>

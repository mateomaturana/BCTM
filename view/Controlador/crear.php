<script>
    $(function () {

        $("#fechareg").datepicker({
            dateFormat: "yy-mm-dd"


        });
    });
</script>
    <div class="container">
    <div class="row">
    	<div class="col-md-12"></div>
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="<?php echo $helper->url("Empresa","crearEmpresa"); ?>" target="_blank">Crear Empresa</a></li>
                    <li class="list-group-item"><a href="<?php echo $helper->url("Empresa","admin"); ?>" target="_blank">Listar Empresa</a></li>
                    
                    </ul>

    </div>
    </div>
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-3">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("Controlador","admin"); ?>" target="_blank">Listar</a></li>
                    <li class="list-group-item"><a href="#" target="_blank">Modificar</a></li>
                    </ul>
                    
  </div>
        </div>
    
    <div class="col-md-8">
<form id="formID" action="<?php echo $helper->url("controlador","crearControlador"); ?>" method="post" class="col-lg-5">
            <h3>Añadir Controlador</h3>
            <hr/>
            Dni del Controlador: <input type="text" name="Dni" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[onlyNumberSp]] text-input"/>
             Nombre: <input type="text" name="nombre" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[onlyLetterSp]] text-input"/>
             Email <input type="text" name="Email" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[email]] text-input "/>
             Telefono: <input type="text" name="Telefono" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[onlyNumberSp]] text-input"/>
             Contraseña: <input type="password" name="Contrasenna" class="form-control validate[required, minSize[8]] text-input"
/>
             Fecha Nacimiento: <input type="text" name="Fecha_nac"id="fechareg" class="form-control validate[required] text-input"/>
             Fk nit de la empresa <br> <select name="FkNitEmpresa" id="FkNitEmpresa" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
                <option value="">Seleccione una Empresa</option>
                <?php
                if($allFkempresa != ""){
                    foreach ($allFkempresa as $item){
                        echo "<option value='$item->Nit_empresa'>$item->Nombre</option>";
                    }
                
                }
                ?></select><br>
             <input type="submit" value="Crear" class="btn btn-success"/>
             
        </form>
    </div>
</body>
</html>



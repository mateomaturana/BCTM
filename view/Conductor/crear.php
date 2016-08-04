<script>
    $(function () {

        $("#fechanac").datepicker({
            dateFormat: "yy-mm-dd"


        });
    });
</script>
    <div class="container">
    <div class="row">
    	<div class="col-md-12"></div>
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="<?php echo $helper->url("Empresa","crearEmpresa"); ?>" target="_blank">Crear Empresa</a></li>
                    <li><a href="<?php echo $helper->url("Empresa","admin"); ?>" target="_blank">Listar Empresa</a></li>
                    
                    </ul>

    </div>
    
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-3">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("conductor","admin"); ?>" target="_blank">Listar</a></li>
                    <li class="list-group-item"><a href="" target="_blank">Modificar</a></li>
                    </ul>
                    
  </div>
        </div>
    
    <div class="col-md-8">
<form id="formID" action="<?php echo $helper->url("conductor","crearConductor"); ?>" method="post" class="col-lg-5">
            <h3>Añadir Conductor</h3>
            <hr/>
            Dni del Conductor: <input type="text" name="Dni" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[onlyNumberSp]] text-input""/>
            <br>
            Nombre: <input type="text" name="nombre" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[onlyLetterSp]] text-input"/>
            <br>
            Email <input type="text" name="Email" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[email]] text-input "
                         /> <br>
             Telefono: <input type="text" name="Telefono" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[onlyNumberSp]] text-input"/>
             <br>
             Contraseña: <input type="password" name="Contrasenna" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, minSize[8]] text-input"
                                /> <br>
             Fecha Nacimiento: <input type="text" name="Fecha_nac" id="fechanac" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"/>
             <br>
             Fk nit de la empresa <br> <select name="FkNitEmpresa" id="FkNitEmpresa" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
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
</div>
        </div>

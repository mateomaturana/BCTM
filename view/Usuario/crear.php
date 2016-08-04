 <div class="container">
    <div class="row">
    	<div class="col-md-8"></div>
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="<?php echo $helper->url("Barrios","admin"); ?>" target="_blank">Listar Barrios</a></li>
                    <li><a href="<?php echo $helper->url("Ruta","admin"); ?>" target="_blank">Listar Rutas</a></li>
                    </ul>

    </div>
   
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-3">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("Usuario","admin"); ?>" target="_blank">Listar</a></li>
                    
                    </ul>
                    
  </div>
         <script>
            $(function () {
               
                $("#fechareg").datepicker({
                    dateFormat: "yy-mm-dd"
                    
                    
                });        
            });
        </script>
</head>

<form id= "formID" action="<?php echo $helper->url("usuario","crearUsuario"); ?>" method="post" class="col-lg-5">
            <h3>Añadir Usuario</h3>
            <hr/>
            Dni del usuario: <input type="text" name="Dni" data-validation-placeholder="Campo obligatorio" class="form-control validate[required,custom[onlyNumberSp]] text-input"
/>
             Nombre: <input type="text" name="nombre"  data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[onlyLetterSp]] text-input"
/>
             Email <input type="text" name="Email" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[email]] text-input "
/>
             Contraseña: <input type="text" name="Contrasenna" class="form-control validate[required, minSize[8]] text-input"
/>
             Fecha Nacimiento: <input type="text" id="fechareg" name="Fecha_nac" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"/>
             genero <input type="text" name="genero" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"
/>
             fk id del barrio <br> <select name="FkBarrio" id="FkBarrio" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
                <option value="">Seleccione un Barrio</option>
                <?php
                if($allFkbarrio != ""){
                    foreach ($allFkbarrio as $item){
                        echo "<option value='$item->id_barrio'>$item->Nombre</option>";
                    }
                
                }
                ?></select><br>

             <input type="submit" value="Crear" class="btn btn-success"/>
             
        </form>

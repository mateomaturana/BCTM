

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="breadcrumb">

                <li class="active"><a href="<?php echo $helper->url("Comuna", "crearComuna"); ?>" target="_blank">Crear Comuna</a></li>
                <li><a href="<?php echo $helper->url("Comuna", "admin"); ?>" target="_blank">Listar Comunas</a></li>

            </ul>
        </div>

    </div>

    <div class="row">

        <div class="body">

            <div class="col-md-3">

                <ul class="list-group">

                    <li class="list-group-item"><a href="<?php echo $helper->url("barrio", "admin"); ?>" target="_blank">Consultar</a></li>
                    
                </ul>

            </div>
        </div>

        <div class="col-md-8">
            <form id="formID" action="<?php echo $helper->url("login", "login"); ?> "method="post" class="col-lg-5">
                <div><?php echo (isset($errores) && $errores != "") ? $errores : ""; ?></div> 
                <h3>Iniciar Sesion</h3>
                <hr/>
                Tipo usuario <select name="TipoUsuario" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input">
                    <option value="1">SuperAdmin</option>
                    <option value="2">Empresa</option>
                    <option value="3">Controlador</option>
                </select><br>
                Correo: <input type="text" name="correo" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"/></br>
                Contraseña:<input type="password" name="contrassena" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"/></br>

                <input type="submit" value="Iniciar Sesion" class="btn btn-success"/>
        </div>


        </form>
    </div>
</div>
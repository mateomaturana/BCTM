
  </div>
<script>
    $(function () {

        $("#fechareg").datepicker({
            dateFormat: "yy-mm-dd"


        });
    });
</script>

<div class="container">


<div class="row">

    <div class="body">

        <div class="col-md-3">

            <ul class="list-group">

                <li class="list-group-item"><a href="<?php echo $helper->url("SuperAdmin", "admin"); ?>" target="_blank">Listar</a></li>
                
            </ul>

        </div>
    </div>

    <div class="col-md-8">
        <form id="formID" action="<?php echo $helper->url("SuperAdmin", "crearSuperAdmin"); ?>" method="post" class="col-lg-5">
            <h3>Añadir SuperAdmin</h3>
            <hr/>
            Dni del usuario: <input type="text" name="Dni" data-validation-placeholder="Campo obligatorio" class="form-control validate[required,custom[onlyNumberSp]] text-input"
                                    />
            Nombre: <input type="text" name="nombre" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[onlyLetterSp]] text-input"
                           />
            Email <input type="text" name="Email" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[email]] text-input "/>
            Contraseña: <input type="text" name="Contrasenna" class="form-control validate[required, minSize[8]] text-input"/>
            Fecha Nacimiento: <input type="text" name="Fecha_nac" id="fechareg" data-validation-placeholder="Campo obligatorio" class="form-control validate[required] text-input"
                                     />
            telefono <input type="text" name="telefono" data-validation-placeholder="Campo obligatorio" class="form-control validate[required,custom[onlyNumberSp] text-input"
                            />
            <input type="submit" value="Crear" class="btn btn-success"/>

        </form>
    </div>
</div>
    </div>
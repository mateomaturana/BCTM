
        <script type="text/javascript">
     $(function () {
$("#fecha_nac").datepicker({
                    dateFormat: "yy-mm-dd"
                });
            });
                </script>
        <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
        </style>
<div class="container">


<div class="row">

    <div class="body">

        <div class="col-md-3">

            <ul class="list-group">

                <li class="list-group-item"><a href="<?php echo $helper->url("SuperAdmin", "admin"); ?>" target="_blank">Listar</a></li>
                
            </ul>

        </div>
    </div>
    
    <form action="<?php echo $helper->url("SuperAdmin", "actualizarSuperAdmin");?>" method="post" class="col-lg-5">
        
            <h3>Mdificar SuperAdmin</h3>
            <hr/>
              <?php if ($superadmin){?>
   
            Nombre: <input type="text" name="Nombre" class="form-control" value="<?php echo $superadmin->Nombre;?>"/>
            Email: <input type="text" name="Email" class="form-control" value="<?php echo $superadmin->Email;?>"/>
            Telefono: <input type="text" name="Telefono" class="form-control" value="<?php echo $superadmin->telefono;?>"/>
            Contraseña: <input type="password" name="Contraseña" class="form-control" value="<?php echo $superadmin->Contrasenna;?>"/>
            Fecha de Nacimiento: <input type="text" name="Fecha_nacimiento" id="fecha_nac" class="form-control" value="<?php echo $superadmin->Fecha_nacimiento;?>"/>
            <input type="hidden" name="Dni_SuperAdmin" value="<?php echo $superadmin->Dni_SuperAdmin;?>"/>
            <input type="submit" value="modificar" class="btn btn-success"/>
              <?php }?>
        </form>
</div>


        <script>
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
</head>
<body>
  
    
     <form action="<?php echo $helper->url("Conductor", "actualizarConductor");?>" method="post" class="col-lg-5">
        
            <h3>Mdificar Conductor</h3>
            <hr/>
              <?php if ($conductor){?>
    <script type="text/javascript">
            $(document).ready(function(){  
                $('#empresa > option[value="<?php echo $conductor->fk_nit_empresa; ?>"]').attr('selected', 'selected');
            });
        </script>
            Nombre: <input type="text" name="Nombre" class="form-control" value="<?php echo $conductor->Nombre;?>"/>
            Email: <input type="text" name="Email" class="form-control" value="<?php echo $conductor->Email;?>"/>
            Telefono: <input type="text" name="Telefono" class="form-control" value="<?php echo $conductor->Telefono;?>"/>
            Contraseña: <input type="password" name="Contrasenna" class="form-control" value="<?php echo $conductor->Contrasenna;?>"/>
            Fecha de Nacimiento: <input type="text" name="Fecha_nacimiento" id="fecha_nac" class="form-control" value="<?php echo $conductor->Fecha_nacimiento;?>"/>
           Nit empresa: <select name="fk_nit_empresa" id="empresa" class="form-control"/><br>
                <option value="">Seleccione una opcion</option>>
                <?php
                  
                if ($empres != "") {
                  
                    foreach ($empres as $em) {
                        echo "<option value='$em->Nit_empresa'>$em->Nombre</option>";
                    }
                }
                ?>
                </select>
            <input type="hidden" name="Dni_conductor" value="<?php echo $conductor->Dni_conductor;?>"/>
            <input type="submit" value="modificar" class="btn btn-success"/>
              <?php }?>
        </form>

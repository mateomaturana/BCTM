
  
    
    <form action="<?php echo $helper->url("Vehiculo", "actualizarVehiculo_transporte");?>" method="post" class="col-lg-5">
        
            <h3>Mdificar Vehiculo</h3>
            <hr/>
              <?php if ($vehiculo_transporte){?>
   <script type="text/javascript">
            $(document).ready(function(){  
                $('#empresa > option[value="<?php echo $vehiculo_transporte->fk_nit_empresa; ?>"]').attr('selected', 'selected');
               
            });
        </script>
            
            Placa_vahiculo: <input type="text" name="Placa_vehiculo" class="form-control" value="<?php echo $vehiculo_transporte->Placa_vehiculo;?>"/>
            Activo : <input type="text" name="Activo" class="form-control" value="<?php echo $vehiculo_transporte->Activo;?>"/>
            Tipo_vehiculo: <input type="text" name="Tipo_vehiculo" class="form-control" value="<?php echo $vehiculo_transporte->Tipo_vehiculo;?>"/>
           Cupo_vehiculo: <input type="text" name="cupo_vehiculo" class="form-control" value="<?php echo $vehiculo_transporte->cupo_vehiculo;?>"/>
           
          fk_nit_empresa : <select name="fk_nit_empresa" id="empresa" class="form-control"/><br>
                <option value="">Seleccione una opcion</option>>
                <?php
                  
                if ($empresa != "") {
                  
                    foreach ($empresa as $em) {
                        echo "<option value='$em->Nit_empresa'>$em->Nombre</option>";
                    }
                }
                ?>
                </select>
            
            <input type="hidden" name="id_vehiculo" value="<?php echo $vehiculo_transporte->id_vehiculo;?>"/>
            <input type="submit" value="modificar" class="btn btn-success"/>
              <?php }?>
        </form>



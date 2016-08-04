
        <script>
            $(function () {
               
                $("#fecha_inicio").datepicker({
                    dateFormat: "yy-mm-dd",
                     
                    minDate: GetTodayDate(),
                    //minDate: 0
                    onSelect: function (dateText, inst) {
                        $('#fecha_fin').val("");
                        $('#fecha_fin').datepicker("option", "minDate", new Date(dateText));
                    }                    
                });
                
                $("#fecha_fin").datepicker({
                    dateFormat: "yy-mm-dd",
                     minDate: GetTodayDate(),
                });
            });
            function GetTodayDate() {
                var tdate = new Date();
                var dd = tdate.getDate(); //yields day
                var MM = tdate.getMonth(); //yields month
                var yyyy = tdate.getFullYear(); //yields year
                var today = yyyy + "-" + (MM + 1) + "-" + dd;

                return today;
            }
        </script>
         <div class="container">
    <div class="row">
    	<div class="col-md-12"></div>
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="<?php echo $helper->url("Ruta","admin"); ?>" target="_blank">Listar Ruta</a></li>
                    <li><a href="<?php echo $helper->url("Ruta","crearRuta"); ?>" target="_blank">crear Ruta</a></li>
                    </ul>

    </div>
    
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-2">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("RegistroRuta","admin"); ?>" target="_blank">Listar Registro rutas</a></li>
                    
                    </ul>
                    
  </div>
        </div>
    <form action="<?php echo $helper->url("RegistroRuta", "actualizarRegistroRuta");?>" method="post" class="col-lg-5">
        
            <h3>Mdificar RegistroRuta</h3>
            <hr/>
              <?php if ($registro_ruta){?>
   <script type="text/javascript">
            $(document).ready(function(){  
                $('#ruta > option[value="<?php echo $registro_ruta->fk_cod_ruta; ?>"]').attr('selected', 'selected');
                 $('#vehiculo > option[value="<?php echo $registro_ruta->id_vehiculo; ?>"]').attr('selected', 'selected');
                 $('#conductor > option[value="<?php echo $registro_ruta->fk_id_conductor; ?>"]').attr('selected', 'selected');
                 $('#empresa > option[value="<?php echo $registro_ruta->fk_id_contEmpresa; ?>"]').attr('selected', 'selected');
            });
        </script>
            <!--Codigo de registro de ruta: <input type="text" name="Codigo_registroRuta" class="form-control" value="<//?php echo $registro_ruta->Codigo_registroRuta;?>"/>-->
        Fecha de salida: <input type="text" name="Fecha_salida" id="fecha_inicio"class="form-control" value="<?php echo $registro_ruta->Fecha_salida;?>"/>
        Fecha de llegada: <input type="text" name="Fecha_llegada" id="fecha_fin" class="form-control" value="<?php echo $registro_ruta->Fecha_llegada;?>"/>
          <!--<input type="text" name="fk_cod_ruta" class="form-control" value="<//?php echo $registro_ruta->fk_cod_ruta;?>"/>-->
            <!--Id vehiculo: <input type="text" name="Nombre" class="form-control" value="<//?php echo $registro_ruta->id_vehiculo;?>"/>-->
             <!--<input type="text" name="fk_id_conductor" class="form-control" value="<//?php echo $registro_ruta->fk_id_conductor;?>"/>-->
            <!--Id Controlador empresa: <input type="text" name="fk_id_contEmpresa" class="form-control" value="<//?php echo $registro_ruta->fk_id_contEmpresa;?>"/>-->
              Codigo de ruta:  <select name="fk_cod_ruta" id="ruta" class="form-control"/><br>
                <option value="">Seleccione una opcion</option>>
                <?php
                  
                if ($ruta != "") {
                  
                    foreach ($ruta as $ru) {
                        echo "<option value='$ru->Cod_ruta'>$ru->Cod_ruta</option>";
                    }
                }
                ?>
                </select>
          Id vehiculo:  <select name="id_vehiculo" id="vehiculo" class="form-control"/><br>
                <option value="">Seleccione una opcion</option>>
                <?php
                  
                if ($vehiculo != "") {
                  
                    foreach ($vehiculo as $ve) {
                        echo "<option value='$ve->id_vehiculo'>$ve->Placa_vehiculo</option>";
                    }
                }
                ?>
                </select>
          
               Id Conductor:  <select name="fk_id_conductor" id="conductor" class="form-control"/><br>
                <option value="">Seleccione una opcion</option>>
                <?php
                  
                if ($conductor != "") {
                  
                    foreach ($conductor as $co) {
                        echo "<option value='$co->Dni_conductor'>$co->Nombre</option>";
                    }
                }
                ?>
                </select>
               
                Id Controlador empresa: <select name="fk_id_contEmpresa" id="empresa" class="form-control"/><br>
                <option value="">Seleccione una opcion</option>>
                <?php
                  
                if ($empresa != "") {
                  
                    foreach ($empresa as $em) {
                        echo "<option value='$em->Dni_controlador'>$em->Nombre</option>";
                    }
                }
                ?>
                </select>
            <input type="hidden" name="Codigo_registroRuta" value="<?php echo $registro_ruta->Codigo_registroRuta;?>"/>
            <input type="submit" value="modificar" class="btn btn-success"/>
              <?php }?>
        </form>
</body>
</html>

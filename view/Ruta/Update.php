
<div class="container">
    <div class="row">
    	<div class="col-md-12"></div>
    	<ul class="breadcrumb">
                    
                    <li class="active"><a href="<?php echo $helper->url("Barrio","admin"); ?>" target="_blank">Listar Barrios</a></li>
                    <li><a href="<?php echo $helper->url("Barrio","crearBarrio"); ?>" target="_blank">Crear Barrios</a></li>
                    </ul>

    </div>
    
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-2">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("Ruta","admin"); ?>" target="_blank">Listar</a></li>
                    <li class="list-group-item"><a href="#" target="_blank">Modificar</a></li>
                    </ul>
                    
  </div>
        </div>
    
    <div class="col-md-10">
  
    
    <form action="<?php echo $helper->url("Ruta", "actualizarRuta");?>" method="post" class="col-lg-5">
        
            <h3>Mdificar Ruta</h3>
            <hr/>
              <?php if ($ruta){?>
   <script type="text/javascript">
            $(document).ready(function(){  
                $('#origen > option[value="<?php echo $ruta->Origen_barrio_id; ?>"]').attr('selected', 'selected');
                $('#destino > option[value="<?php echo $ruta->Destino_barrio_id; ?>"]').attr('selected', 'selected');
            });
        </script>
            <!--Codigo de ruta: <input type="text" name="Cod_ruta" class="form-control" value="<//?php echo $ruta->Cod_ruta;?>"/>-->
            <!--Id origen de barrio: <input type="text" name="Origen_barrio_id" class="form-control" value="<//?php echo $ruta->Origen_barrio_id;?>"/>-->
            <!--Id barrio destino: <input type="text" name="Destino_barrio_id" class="form-control" value="<//?php echo $ruta->Destino_barrio_id;?>"/>-->
               Id origen de barrio: <select name="Origen_barrio_id" id="origen" class="form-control"/><br>
                <option value="">Seleccione una opcion</option>>
                <?php
                  
                if ($barrio != "") {
                  
                    foreach ($barrio as $ba) {
                        echo "<option value='$ba->id_barrio'>$ba->Nombre</option>";
                    }
                }
                ?>
                </select>
               
                Id destino de barrio: <select name="Destino_barrio_id" id="destino" class="form-control"/><br>
                <option value="">Seleccione una opcion</option>>
                <?php
                  
                if ($barrio != "") {
                  
                    foreach ($barrio as $ba) {
                        echo "<option value='$ba->id_barrio'>$ba->Nombre</option>";
                    }
                }
                ?>
                </select>
            <input type="hidden" name="Cod_ruta" value="<?php echo $ruta->Cod_ruta;?>"/>
            <input type="submit" value="modificar" class="btn btn-success"/>
              <?php }?>
        </form>
</body>
</html>

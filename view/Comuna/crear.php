
    <div class="container">
    
    
        <div class="row">
    
        <div class="body">
            
        <div class="col-md-3">
       
        <ul class="list-group">
                    
                    <li class="list-group-item"><a href="<?php echo $helper->url("comuna","admin"); ?>" target="_blank">listar</a></li>
                    <li class="list-group-item"><a href="#" target="_blank">Modificar</a></li>
                    </ul>
                    
  </div>
        </div>
    
    <div class="col-md-8">
<form  id="formID" action="<?php echo $helper->url("comuna","crearComuna"); ?>" method="post" class="col-lg-5">
            <h3>Añadir Comuna</h3>
            <hr/>
            Id de la comuna: <input type="text" name="id_comuna" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[onlyNumberSp]] text-input"/>
             Nombre: <input type="text" name="nombre" data-validation-placeholder="Campo obligatorio" class="form-control validate[required, custom[onlyLetterSp]] text-input"/>
            <input type="submit" value="Crear" class="btn btn-success"/>
            
        </form>
    </div>
            </div>
        </div>
</body>
</html>

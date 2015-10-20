<!-- AGREGAR NOTICIA -->
        
      
        <div class="col-md-6">
          <form action="index.php?action=agregar_noticia" method="POST" enctype="multipart/form-data" id="form-noticia">
            <!-- html -->
            
            <div class="form-group">
    		<label for="idcategoria">Id Categoria:</label>
              <div>
                <input type="text" class="form-control" id="idcategoria" placeholder="ID Categoria" name="categoria">
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Categoria <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    {foreach $noticias as $noticia}
                    <li onclick="cargarid('{$noticia['nombre']}')">{$noticia['nombre']}</li>
                    {/foreach}
                  </ul>
                </div>
              </div>
    	    </div>
     <!--   <div class="form-group">
                <label for="categoria">Categoria</label>
                <input type="text" class="form-control" id="categoria" name="categoria" placeholder="categoria: Dieta/Ejercicio">
            </div> -->
            
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo de noticia">
            </div>

            
              <div class="form-group">
                <label for="task">Texto</label>
                <input type="text" class="form-control" id="task" name="task" placeholder="Descripcion">
            </div>
              
            <div class="form-group">
              <label for="imagesToUpload">Imagen</label>
              <input type="file" name="imagesToUpload[]" id="imagesToUpload"/>
            </div>

            <button type="submit" class="btn btn-default cargarcategoria">Agregar</button>
          </form>
        </div>
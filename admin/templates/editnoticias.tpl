</div>
<!-- /CONTENEDOR WEB AJAX -->


<!-- AGREGAR NOTICIA -->      
        <div class="col-md-6">
          <form action="index.php?action=agregar_noticia" method="POST" enctype="multipart/form-data" id="form-noticia">
            <!-- html -->
            
     <!--   <div class="form-group">
                <label for="categoria">Categoria</label>
                <input type="text" class="form-control" id="categoria" name="categoria" placeholder="categoria: Dieta/Ejercicio">
            </div> -->
            
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo de noticia">
            </div>
            
              <div class="form-group">
                <label for="descripcion">Texto</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion">
            </div>
              
            <div class="form-group">
              <div>
                <input type="text" class="form-control invisible" id="idcategoria" name="categoria">
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
            
            <div class="form-group">
              <label for="imagesToUpload">Imagen</label>
              <input type="file" name="imagesToUpload[]" id="imagesToUpload"/>
            </div>

            <button type="submit" class="btn btn-default cargarcategoria">Agregar Noticia</button>
          </form>
        </div>
              <!-- /AGREGAR NOTICIA -->
          
               <!-- AGREGAR CATEGORIA --> 
        <div class="col-md-6">
          <form action="index.php?action=agregar_categoria" method="POST" enctype="multipart/form-data" id="form-categoria">
            <div class="form-group">
                <label for="titulo">Crear Categoria</label>
                <input type="text" class="form-control" id="newcategoria" name="newcategoria" placeholder="Nombre de Nueva Categoria">
            </div>
            <button type="submit" class="btn btn-default">Agregar Categoria</button>
          </form>
        </div>
          
              <!-- /AGREGAR CATEGORIA --> 
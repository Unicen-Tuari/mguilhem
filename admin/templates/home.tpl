<div class="novedades col-lg-12">
    
        <!-- NOVEDADES FEATURE ADMIN -->
        <div class="col-xs-4 col-sm-3 col-sm-offset-1 col-md-3 col-md-offset-2">
            <div class="dropdown">
                
                <button class="btn btn-default btn-lg dropdown-toggle btn-success" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Filtro Categorias <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a onclick="cargarweb('home_min')">Todos</a></li>
                    <li role="separator" class="divider"></li>
                    {foreach $todascat as $noticia}
                        <li><a onclick="cargarnoticias('{$noticia['nombre']}','dropdown')">{$noticia['nombre']}</a></li>
                    {/foreach}
                </ul>
            </div>
        </div>

        <div class="col-sm-8 col-md-7 ">
            <h1>Novedades</h1>
        </div>

        <div class="container">
      <div class="row">

          
        <div class="col-sm-12 col-md-12">
          <ul class="list-group">
            {foreach $noticias as $noticia}
                <li class="list-group-item">Categoria: 
                    {$noticia['nombre']}

                    {foreach $noticia['imagenes'] as $imagen}
                        <h2>{$imagen["titulo"]} <a class="glyphicon glyphicon-trash" onclick="borrarnoticia('{$imagen['id']}','borrar_noticia')"></a></h2>
                    
                        <br/><img src="../{$imagen['path']}" alt="imagen-{$imagen['id']}-tarea-{$noticia['id']}" class="img-thumbnail" /><br/>
                        {$imagen["descripcion"]}
                    {/foreach}
            {/foreach}
          </ul>
            
        </div>
      </div>
        
         <!-- AGREGAR NOTICIA -->
        
      <div class="row">
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
      </div>
    </div>
    
    <!-- /AGREGAR NOTICIA -->
    
  
</div>

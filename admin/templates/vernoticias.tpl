<div class="novedades col-lg-12">
    

      <!-- NOVEDADES -->

    <div class="col-sm-12 col-md-12 text-center">
        <h1>Novedades</h1>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <ul class="list-group">
            {foreach $noticias as $categoria}
              <li class="list-group-item"><h3>Categoria: {$categoria['nombre']}</h3>
                {if ($categoria['imagenes'])}
                  {foreach $categoria['imagenes'] as $noticia}
                    <h2>{$noticia["titulo"]} <a class="glyphicon glyphicon-trash pointer" onclick="borrarnoticia('{$noticia['id']}','borrar_noticia')"></a></h2>
                    <br/><img src="../{$noticia['path']}" alt="imagen-{$noticia['id']}-noticia-{$categoria['id']}" class="img-thumbnail" /><br/>
                    {$noticia["descripcion"]}
                  {/foreach}
                {else}<p>Categoría Vacía</p>
                {/if}
            {/foreach}
          </ul>
        </div>
      </div>
    </div>
</div>
         
<!-- AGREGAR NOTICIA -->      
        <div class="col-md-6 botmargin">
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
                    {foreach $noticias as $categoria}
                    <li onclick="cargarid('{$categoria['nombre']}')">{$categoria['nombre']}</li>
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
    


<div class="novedades col-lg-12">
    
        <!-- NOTICIAS FEATURE ADMIN -->
        <div class="col-xs-4 col-sm-3 col-sm-offset-1 col-md-3 col-md-offset-2">
            <div class="dropdown">
                
                <button class="btn btn-default btn-lg dropdown-toggle btn-success" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">CATEGORIAS<span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a onclick="cargarweb('home_min')">Todos</a></li>
                    <li role="separator" class="divider"></li>
                    {foreach $todascat as $tarea}
                        <li><a onclick="cargarnoticias('{$tarea['nombre']}','dropdown')">{$tarea['nombre']}</a></li>
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
            {foreach $tareas as $tarea}
                <li class="list-group-item">Categoria: 
                    {$tarea['nombre']}

                    {foreach $tarea['imagenes'] as $imagen}
                        <h2>{$imagen["titulo"]} <a class="glyphicon glyphicon-trash" href="index.php?action=borrar_tarea&id_task={$imagen['id']}"></a></h2>
                    
                        <br/><img src="../{$imagen['path']}" alt="imagen-{$imagen['id']}-tarea-{$tarea['id']}" class="img-thumbnail" /><br/>
                        {$imagen["descripcion"]}    
                    {/foreach}
            {/foreach}
          </ul>
            
        </div>
      </div>
        
        
      <div class="row">
        <div class="col-md-6">
          <form action="index.php?action=agregar_tarea" method="POST" enctype="multipart/form-data">
            <!-- html -->
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <input type="text" class="form-control" id="categoria" name="categoria" placeholder="categoria: Dieta/Ejercicio">
            </div>
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo de noticia">
            </div>
        

            <div class="form-group">
                <label for="task">Texto</label>
                <textarea rows="4" cols="50" class="form-control" id="task" name="task" placeholder="Descripcion"></textarea>
            </div>
              
            <div class="form-group">
              <label for="imagesToUpload">Imagen</label>
              <input type="file" name="imagesToUpload[]" id="imagesToUpload"/>
            </div>

            <button type="submit" class="btn btn-default">Agregar</button>
          </form>
        </div>
      </div>
    </div>
    
    <!-- /NOTICIAS FEATURE ADMIN -->
    
  
</div>

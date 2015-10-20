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
                {foreach $noticias as $categoria}
                    <li class="list-group-item">Categoria: {$categoria['nombre']}
                        {if ($categoria['imagenes'])}
                          {foreach $categoria['imagenes'] as $noticia}

                            <h2>{$noticia["titulo"]} <a class="glyphicon glyphicon-trash" onclick="borrarnoticia('{$noticia['id']}','borrar_noticia')"></a></h2>

                            <br/><img src="../{$noticia['path']}" alt="imagen-{$noticia['id']}-tarea-{$categoria['id']}" class="img-thumbnail" /><br/>
                            {$noticia["descripcion"]}

                          {/foreach}
                        {else}<p>Categoría Vacía</p>
                        {/if}
                {/foreach}
              </ul>
            
            </div>
          </div>
        
         

    
  


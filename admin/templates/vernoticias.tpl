<div class="novedades col-lg-12">
    <!-- NOVEDADES -->
    <div class="col-sm-12 col-md-12 text-center">
        <h1>Novedades</h1>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <ul class="list-group">
            <div id="categorias">
              {foreach $noticias as $categoria}
                <div id="categoria{$categoria['id_cat']}">
                  <li class="list-group-item">
                    <h2>Categoria: <b id="cat{$categoria['id_cat']}">{$categoria['nombre']}</b>
                      <i class="fa fa-wrench faa-wrench animated-hover pointer" onclick="toggleview('.wrenchcat{$categoria['nombre']}')"></i>
                      <a class="glyphicon glyphicon-trash pointer invi wrenchcat{$categoria['nombre']}" onclick="borrarCategoria('{$categoria['id_cat']}')"></a>
                    </h2>
                    <form class="invi wrenchcat{$categoria['nombre']}">
                      <input id="cata{$categoria['id_cat']}" type="text" placeholder="{$categoria['nombre']}"></input>
                      <a onclick="cambiarNombreCat('{$categoria['id_cat']}')" class="btn btn-default">Cambiar Nombre Categoria</a>
                    </form>
                      <div id="noticias{$categoria['id_cat']}">
                      {if ($categoria['imagenes'])}
                        {foreach $categoria['imagenes'] as $noticia}
                          <div id="noticia{$noticia['id']}">
                            <h3 id="titulo{$noticia['id']}">{$noticia["titulo"]}</h3>
                            <h3>
                              <i class="fa fa-wrench faa-wrench animated-hover pointer" onclick="toggleview('.wrenchtit{$noticia['id']}')"></i>
                              <a class="glyphicon glyphicon-trash pointer invi wrenchtit{$noticia['id']}" onclick="borrarnoticia('{$noticia['id']}')"></a>
                            </h3>
                            <form class="invi wrenchtit{$noticia['id']}">
                              <input id="cambiar{$noticia['titulo']}" type="text" placeholder="{$noticia['titulo']}"></input>
                              <a onclick="cambiarValorNot('{$noticia['id']}','titulo','cambiar{$noticia['titulo']}')" class="btn btn-default">Cambiar Titulo</a>
                            </form>
                            <br/>
                            <img src="../{$noticia['path']}" alt="imagen-{$noticia['id']}-noticia-{$categoria['id']}" class="img-thumbnail" />
                            <br/>
                            <c id="descripcion{$noticia['id']}">{$noticia["descripcion"]}</c>
                            <i class="fa fa-wrench faa-wrench animated-hover pointer" onclick="toggleview('.wrenchdesc{$noticia['id']}')"></i>
                            <form class="invi wrenchdesc{$noticia['id']}">
                              <input id="descripcioninput{$noticia['id']}" type="text" placeholder="descripcion nueva"></input>
                              <a onclick="cambiarValorNot('{$noticia['id']}','descripcion','descripcioninput{$noticia['id']}')" class="btn btn-default">Cambiar Texto</a>
                            </form>
                          </div>
                        {/foreach}
                      </div>
                  </li>
                </div>
                  {else}<p>Categoría Vacía</p>
                  {/if}
              {/foreach}
            </div>
          </ul>
        </div>
      </div>
    </div>
</div>
         
<!-- AGREGAR NOTICIA -->      
        <div class="col-md-6 botmargin">
          <form action="index.php?action=agregar_noticia" method="POST" enctype="multipart/form-data" id="form-noticia">
            
            <div class="form-group">
              <label for="titulonew">Titulo</label>
              <input type="text" class="form-control" id="titulonew" name="titulonew" placeholder="Titulo de noticia">
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
                  <ul id="catedrop"class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    {foreach $noticias as $categoria}
                      <li id="dropdown{$categoria['id_cat']}" onclick="cargarid('{$categoria['id_cat']}')">{$categoria['nombre']} </li>
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
    
<script src="js/listener.js"></script>


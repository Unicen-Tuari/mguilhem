<!DOCTYPE html>  
<!-- CONTENEDOR WEB AJAX -->
<div id="contenedorweb">

    <!-- NOTICIAS FEATURE -->

        <div class="col-xs-4 col-sm-3 col-sm-offset-1 col-md-3 col-md-offset-2">
            <div class="dropdown">
                
                <button class="btn btn-default btn-lg dropdown-toggle btn-success" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">CATEGORIAS<span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Todos</a></li>
                    <li role="separator" class="divider"></li>
                    {foreach $tareas as $tarea}
                        <li><a href="#">{$tarea['nombre']}</a></li>
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
                    
                        <br/><img src="{$imagen['path']}" alt="imagen-{$imagen['id']}-tarea-{$tarea['id']}" class="img-thumbnail" /><br/>
                        {$imagen["descripcion"]}    
                    {/foreach}
            {/foreach}
          </ul>
            
        </div>
      </div>

        <!-- caja de errores -->
      <div class="row">
        <div class="col-md-6">
          {if count($errores) gt 0}
          <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Errores</h3>
            </div>
            <ul>
              {foreach $errores as $error}
                <li>{$error}</li>
              {/foreach}
            </ul>
          </div>
          {/if}
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
                <input type="text" class="form-control" id="task" name="task" placeholder="Descripcion">
            </div>
            
            <div class="form-group">
              <label for="imagesToUpload">Imagenes</label>
              <input type="file" name="imagesToUpload[]" id="imagesToUpload" multiple/>
            </div>

            <button type="submit" class="btn btn-default">Agregar</button>
          </form>
        </div>
      </div>
    </div>
    
    <!-- /NOTICIAS FEATURE -->
    

    
    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h1 class="section-heading">DIETA es una<br/> Mala Palabra&#33;</h1>
                    <hr class="light"> <!-- separador claro -->
                    <h3>Cuando tengas hambre Nunca te diremos que NO comas, pero SI te diremos cu&aacute;les son las mejores opciones para t&iacute;</h3>
                    <a onclick="cargarweb('comidas')" class="btn btn-primary ">COMIDAS</a>
                </div>
            </div>
        </div>
    </section>
    

    <section id="presentacion">
    <h1 class="section-heading">Presentaci&oacute;n</h1>
    <hr/>
    
    <div class="youtube">
    <iframe class="youtube" src="https://www.youtube.com/v/i3Vgzuf9zLE?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
    </div>
    <h2>Pues entonces... &iquest;Qu&eacute; debemos comer?</h2>
    <p>Decir que las Dietas severas no dan resultado, solamente hay que aprender a hacer dietas inteligentes.</p>
    <p>Por eso, recomendamos que sigan los siguientes consejos:
    </p>
    
    <ol>
        <li>Lee las etiquetas de los productos que consumes, deber&iacute;as evitar los siguientes componentes: <ul><li>Az&uacute;cares simples</li>
<li>Harina enriquecida, blanqueada o refinada (significa que han eliminado sus nutrientes)</li>
<li>JMAF (jarabe de ma&iacute;z alto en fructosa)</li>
</ul>
        </li>
        <li>Elige grasas no saturadas en lugar de saturadas. Los alimentos con abndates grasas saturadas (es uno de los tipos de grasas del envejecimiento) producen niveles m&aacute;s bajos de leptina que los alimentos bajos en grasas con las mismas calor&iacute;as. Esto indica que puedes incrementar tu nivel de saciedad y disminuir tu hambre al evitar las grasas saturadas que encuentras en las carnes muy grasosas, los alimentos horneados y los productos a base de leche entera</li>
        <li>No confundas sed con hambre. La raz&oacute;n por la cual mucha gente come es porque sus centros de saciedad suplican atenci&oacute;n. Pero esos centros de apetito quieren apagar la sed, no llenar el est&oacute;mago. La sed puede ser causada por hormonas en las tripas o puede ser una respuesta qu&iacute;mica al acto de comer; ingerir comida incrementa el espesor de la sangre y tu cuerpo siente la necesidad de dilurila.</li>
        <li>Evita la tentaci&oacute;n del alcohol: Para perder peso, evita beber alcohol con exceso, no s&oacute;lo por las calor&iacute;as que contiene sino por las calor&iacute;as que te llevan consumirlo m&aacute;s adelante. El alcohol disminuye tus inhibiciones, de manera que terminas por sentir que podr&iacute;as comer cualquier cosa o todo lo que veas.</li>
        <li>Cuida tus carbohidratos: Ingerir una dieta muy alta en carbohidratos incrementa el NPY, el cual te hace sentir hambre, as&iacute; que deber&aacute;s asegurarte de que menos de 50 por ciento de tu dieta provenga de los carbohidratos. Aseg&uacute;rate de que la mayor&iacute;a de tus carbohidratos sean complejos, como los granos integrales y los vegetales.
        </li>
    </ol>
    </section>

    
    <!-- Cambia tu Estilo de Vida -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Nunca te olvides de&#58;</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-cutlery wow bounceIn text-primary" data-wow-delay=".5s"></i>
                        <h3>Comer Sano</h3>
                        <p class="text-muted">Cuida lo que comes! Recuerda que todo lo que ingieres pasa a formar parte de t&iacute; </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-futbol-o wow bounceIn text-primary" data-wow-delay=".8s"></i>
                        <h3>Ejercitar Diariamente</h3>
                        <p class="text-muted">La consistencia y la perseverancia es lo más importante</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay="1.2s"></i>
                        <h3>Ser Positivo</h3>
                        <p class="text-muted">Tener pensamientos Positivos alegrará tu día y calmará las ansiedades </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-bed wow bounceIn text-primary" data-wow-delay="1.5s"></i>
                        <h3>Dormir Mucho</h3>
                        <p class="text-muted">Si&#33; Descansar Bien es casi tan importante como hacer ejercicio</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Seccion GYM ENTRENA AHORA -->
    <aside class="bg-dark">
        <div class="container text-center">
            <div class="entrena_ahora">
                <h2>&#191;Hace mucho que no entrenas&#63;</h2>
                <a onclick="cargarweb('ejercicios')" class="btn btn-primary wow tada" data-wow-delay=".8s" data-wow-iteration="2">ENTRENA AHORA&#33;</a>
            </div>
        </div>
    </aside>

</div>
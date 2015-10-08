<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8"/>                                                  <!-- tipo de caracter utf-8 -->
    <meta name="author" content="Guilhem Maximiliano"/>                      <!-- Autor de página -->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>    <!-- composición en los navegadores móviles -->
    
    <title>Admin Alimentaci&oacute;n Sana</title>
    
    <!-- Cargamos Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css"/>
    
    <!-- Cargamos Awesome Fonts -->
    <link rel="stylesheet" href="../css/Awesome_Fonts.css" type="text/css"/>
    <link rel="stylesheet" href="../css/Awesome_Fonts2.css" type="text/css"/>

    <!-- Mi estilo CSS -->
    <link rel="stylesheet" href="../css/style.css" type="text/css"/>

</head>

<body>
    
    
<!-- caja de errores -->
      
        <div class="col-md-12">
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
      
    
<!-- CONTENEDOR WEB AJAX -->
<div id="contenedorweb">

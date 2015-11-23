<?php /* Smarty version 3.1.27, created on 2015-11-23 18:35:22
         compiled from "C:\xampp\htdocs\progweb2\admin\templates\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:81805653869a8fff07_14014183%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b18139a142d037bddfdedf36672d78ee4d1cbb94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progweb2\\admin\\templates\\header.tpl',
      1 => 1448314514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81805653869a8fff07_14014183',
  'variables' => 
  array (
    'errores' => 0,
    'error' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5653869a946416_61624437',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5653869a946416_61624437')) {
function content_5653869a946416_61624437 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '81805653869a8fff07_14014183';
?>
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
    <!-- jQuery  -->
    <?php echo '<script'; ?>
 src="../js/jquery.js"><?php echo '</script'; ?>
>
    
<!-- caja de errores -->
      
        <div class="col-md-12">
          <?php if (count($_smarty_tpl->tpl_vars['errores']->value) > 0) {?>
          <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Errores</h3>
            </div>
            <ul>
              <?php
$_from = $_smarty_tpl->tpl_vars['errores']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['error']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
$foreach_error_Sav = $_smarty_tpl->tpl_vars['error'];
?>
                <li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
              <?php
$_smarty_tpl->tpl_vars['error'] = $foreach_error_Sav;
}
?>
            </ul>
          </div>
          <?php }?>
        </div>
      
<span class="pull-right">Hola <strong><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</strong>! <button id="logout" href="index.php?action=logout">Logout</button></span>
<!-- CONTENEDOR WEB AJAX -->
<div id="contenedorweb">

<?php }
}
?>
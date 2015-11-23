<?php /* Smarty version 3.1.27, created on 2015-11-23 17:01:41
         compiled from "C:\xampp\htdocs\progweb2\admin\templates\editnoticias.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:22344565370a57aa1c5_57692791%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69b790b04528ad8d352d13001bd5024728b217ea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progweb2\\admin\\templates\\editnoticias.tpl',
      1 => 1447640855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22344565370a57aa1c5_57692791',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565370a57ae040_16385840',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565370a57ae040_16385840')) {
function content_565370a57ae040_16385840 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '22344565370a57aa1c5_57692791';
?>
</div>
<!-- /CONTENEDOR WEB AJAX -->

          
<!-- AGREGAR CATEGORIA --> 
<div class="col-md-6 botmargin" >
  <form action="index.php?action=agregar_categoria" method="POST" enctype="multipart/form-data" id="form-categoria">
    <div class="form-group">
      <label for="titulo">Crear Categoria</label>
      <input type="text" class="form-control" id="newcategoria" name="newcategoria" placeholder="Nombre de Nueva Categoria">
    </div>
    <button type="submit" class="btn btn-default">Agregar Categoria</button>
  </form>
</div>
          
<!-- /AGREGAR CATEGORIA --> <?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2015-11-23 17:01:41
         compiled from "C:\xampp\htdocs\progweb2\admin\templates\vernoticias.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11755565370a57736b5_68730101%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cb68132759c725cefa4e55f74e7802aedc8f73a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progweb2\\admin\\templates\\vernoticias.tpl',
      1 => 1447893268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11755565370a57736b5_68730101',
  'variables' => 
  array (
    'noticias' => 0,
    'categoria' => 0,
    'noticia' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565370a5796948_47544764',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565370a5796948_47544764')) {
function content_565370a5796948_47544764 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11755565370a57736b5_68730101';
?>
<div class="novedades col-lg-12">
    

      <!-- NOVEDADES -->

    <div class="col-sm-12 col-md-12 text-center">
        <h1>Novedades</h1>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <ul class="list-group">
            <?php
$_from = $_smarty_tpl->tpl_vars['noticias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['categoria']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
$foreach_categoria_Sav = $_smarty_tpl->tpl_vars['categoria'];
?>
              <li class="list-group-item"><h3>Categoria: <?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</h3>
                <?php if (($_smarty_tpl->tpl_vars['categoria']->value['imagenes'])) {?>
                  <?php
$_from = $_smarty_tpl->tpl_vars['categoria']->value['imagenes'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['noticia'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['noticia']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->value) {
$_smarty_tpl->tpl_vars['noticia']->_loop = true;
$foreach_noticia_Sav = $_smarty_tpl->tpl_vars['noticia'];
?>
                    <h2><?php echo $_smarty_tpl->tpl_vars['noticia']->value["titulo"];?>
 <a class="glyphicon glyphicon-trash pointer" onclick="borrarnoticia('<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id'];?>
','borrar_noticia')"></a></h2>
                    <br/><img src="../<?php echo $_smarty_tpl->tpl_vars['noticia']->value['path'];?>
" alt="imagen-<?php echo $_smarty_tpl->tpl_vars['noticia']->value['id'];?>
-noticia-<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
" class="img-thumbnail" /><br/>
                    <?php echo $_smarty_tpl->tpl_vars['noticia']->value["descripcion"];?>

                  <?php
$_smarty_tpl->tpl_vars['noticia'] = $foreach_noticia_Sav;
}
?>
                <?php } else { ?><p>Categoría Vacía</p>
                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['categoria'] = $foreach_categoria_Sav;
}
?>
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
                    <?php
$_from = $_smarty_tpl->tpl_vars['noticias']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['categoria'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['categoria']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->_loop = true;
$foreach_categoria_Sav = $_smarty_tpl->tpl_vars['categoria'];
?>
                    <li onclick="cargarid('<?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
')"><?php echo $_smarty_tpl->tpl_vars['categoria']->value['nombre'];?>
</li>
                    <?php
$_smarty_tpl->tpl_vars['categoria'] = $foreach_categoria_Sav;
}
?>
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
    
<?php echo '<script'; ?>
 src="js/listener.js"><?php echo '</script'; ?>
>

<?php }
}
?>
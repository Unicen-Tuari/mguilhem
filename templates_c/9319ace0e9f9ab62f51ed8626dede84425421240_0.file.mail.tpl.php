<?php /* Smarty version 3.1.27, created on 2015-11-23 12:51:44
         compiled from "C:\xampp\htdocs\progweb2\templates\mail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15947565336109b2884_91659331%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9319ace0e9f9ab62f51ed8626dede84425421240' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progweb2\\templates\\mail.tpl',
      1 => 1448241608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15947565336109b2884_91659331',
  'variables' => 
  array (
    'notificacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565336109fcc17_95535028',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565336109fcc17_95535028')) {
function content_565336109fcc17_95535028 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15947565336109b2884_91659331';
?>
<div class="container contact">
            
  <div class="text-center">
      <h1 class="section-heading contact">Te ha servido lo publicado&#63;<br/>Tienes Preguntas&#63;</h1>
      <hr class="primary"> <!-- separador -->
  </div>

  <form id="consulta" action="index.php?action=envia_mail">

    <textarea class="form-control vertical" id="mensaje" name="mensaje" placeholder="Deja tu consulta" rows="6" required></textarea>

    <br/>

    <label for="nombremail" class="sr-only">Nombre</label>
    <input type="text" id="nombremail" name="nombremail" class="form-control mail-input col-lg-offset-3 col-lg-6" placeholder="Nombre" required>
    </input>

    <br/>

    <label for="mailfrom" class="sr-only"></label>
    <input type="email" id="mailfrom" name="mailfrom" class="form-control mail-input col-lg-offset-3 col-lg-6" placeholder="Email" required>
    </input>

    <br/>

    <button id="submitmail" class="btn btn-lg btn-primary col-lg-offset-4 col-lg-4 margin-bottom" type="submit">Enviar</button>
    <div id="loading" class="col-lg-offset-4 col-lg-4 text-center"></div>  
  </form>

  <?php if ((isset($_smarty_tpl->tpl_vars['notificacion']->value))) {?>
    <?php if (($_smarty_tpl->tpl_vars['notificacion']->value == "success")) {?>
      <div id="mailenviado" class="alert alert-success text-center col-lg-offset-4 col-lg-4"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> El Mail se ha enviado correctamente</div>
    <?php }?>
    <?php if (($_smarty_tpl->tpl_vars['notificacion']->value == "error")) {?>
        <div id="mailenviado" class="alert alert-danger text-center col-lg-offset-4 col-lg-4"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> El Mail no se pudo enviar</div>
    <?php }?>
  <?php }?>

  <div class="col-lg-4 col-lg-offset-2 text-center">
    <i class="fa fa-facebook-official fa-5x wow bounceIn" data-wow-delay=".5s" ></i>
    <p><a href="http://www.facebook.com/maxi.guilhem">facebook</a></p>
  </div>
  <div class="col-lg-4 text-center">
    <i class="fa fa-envelope-o fa-5x wow bounceIn" data-wow-delay=".8s"></i>
    <p><a href="mailto:maximiliano.guilhem@gmail.com">e-mail</a></p>
  </div>
            
</div>


<!-- MAIL JS LISTENER-->
<?php echo '<script'; ?>
 src="js/mail.js"><?php echo '</script'; ?>
><?php }
}
?>
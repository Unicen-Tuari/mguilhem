<?php /* Smarty version 3.1.27, created on 2015-11-23 17:17:39
         compiled from "C:\xampp\htdocs\progweb2\admin\templates\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31065565374636edcc9_56371927%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fff6bb2a0e7d46c4a66ee8212b8fe82634bc2bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progweb2\\admin\\templates\\login.tpl',
      1 => 1448309840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31065565374636edcc9_56371927',
  'variables' => 
  array (
    'errores' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5653746373fd54_85757092',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5653746373fd54_85757092')) {
function content_5653746373fd54_85757092 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31065565374636edcc9_56371927';
?>
<!DOCTYPE html>
<div id="html">
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Login - Admin Noticias</title>
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css"/>
      <!-- Custom styles for this template -->
      <link href="css/login.css" rel="stylesheet">
    </head>

    <body class="admin">
      <div class="container">

        <form id="form-login" class="form-signin" method="POST" action="index.php?action=login">
          <h2 class="form-signin-heading">Login - Admin Noticias</h2>
          <label for="txtEmail" class="sr-only">Email</label>
          <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email" required autofocus>
          <label for="txtPassword" class="sr-only">Password</label>
          <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Password" required>
          <?php if (count($_smarty_tpl->tpl_vars['errores']->value) > 0) {?>
            <div class="alert alert-danger" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Error:</span>
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
                <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

              <?php
$_smarty_tpl->tpl_vars['error'] = $foreach_error_Sav;
}
?>
            </div>
          <?php }?>
          <button class="btn btn-lg btn-primary btn-block" type="submit">LOGIN</button>
        </form>

      </div>

    <?php echo '<script'; ?>
 src="../js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/md5.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/loginlistener.js"><?php echo '</script'; ?>
>

    </body>
  </html>
</div><?php }
}
?>
<?php /* Smarty version 3.1.27, created on 2015-11-23 17:01:41
         compiled from "C:\xampp\htdocs\progweb2\admin\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18913565370a57bda45_97751714%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00d98e4d2d7de17679ea1a43a80689225651cde2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progweb2\\admin\\templates\\footer.tpl',
      1 => 1448174332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18913565370a57bda45_97751714',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565370a57c18c9_56323956',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565370a57c18c9_56323956')) {
function content_565370a57c18c9_56323956 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18913565370a57bda45_97751714';
?>
    <!-- Bootstrap JavaScript -->
    <?php echo '<script'; ?>
 src="../js/bootstrap.min.js"><?php echo '</script'; ?>
>
    
    <!-- ADMIN SISTEMA REST + ACCIONES MVC -->
    <?php echo '<script'; ?>
 src="js/restadmin.js"><?php echo '</script'; ?>
>


</body>

</html><?php }
}
?>
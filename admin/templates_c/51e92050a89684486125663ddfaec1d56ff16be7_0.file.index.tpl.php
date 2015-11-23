<?php /* Smarty version 3.1.27, created on 2015-11-23 17:01:41
         compiled from "C:\xampp\htdocs\progweb2\admin\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19557565370a56ee993_17145933%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51e92050a89684486125663ddfaec1d56ff16be7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progweb2\\admin\\templates\\index.tpl',
      1 => 1445327110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19557565370a56ee993_17145933',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565370a572d1a7_72146178',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565370a572d1a7_72146178')) {
function content_565370a572d1a7_72146178 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19557565370a56ee993_17145933';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'header'), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("vernoticias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'cont'), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("editnoticias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'adminnoti'), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0);

}
}
?>
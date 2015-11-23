<?php /* Smarty version 3.1.27, created on 2015-11-23 12:40:22
         compiled from "C:\xampp\htdocs\progweb2\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2381556533366e75523_55120532%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '541fb03f8de40b6aa08b9093dc6f27c02a2ca464' => 
    array (
      0 => 'C:\\xampp\\htdocs\\progweb2\\templates\\index.tpl',
      1 => 1443242444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2381556533366e75523_55120532',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56533366ed3133_80050697',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56533366ed3133_80050697')) {
function content_56533366ed3133_80050697 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2381556533366e75523_55120532';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'header'), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'cont'), 0);
?>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0);

}
}
?>
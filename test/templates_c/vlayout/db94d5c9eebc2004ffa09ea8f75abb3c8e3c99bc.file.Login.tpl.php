<?php /* Smarty version Smarty-3.1.7, created on 2016-06-28 21:33:40
         compiled from "C:\wamp\www\vtigercolombia\novcali\includes\runtime/../../layouts/vlayout\modules\Users\Login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:258005772ed34766502-45677580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db94d5c9eebc2004ffa09ea8f75abb3c8e3c99bc' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\novcali\\includes\\runtime/../../layouts/vlayout\\modules\\Users\\Login.tpl',
      1 => 1467115961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258005772ed34766502-45677580',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_CustomLoginTemplateFullPath' => 0,
    '_CustomLoginTemplate' => 0,
    '_DefaultLoginTemplate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5772ed3492abc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5772ed3492abc')) {function content_5772ed3492abc($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["_DefaultLoginTemplate"] = new Smarty_variable(vtemplate_path('Login.Default.tpl','Users'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["_CustomLoginTemplate"] = new Smarty_variable(vtemplate_path('Login.Custom.tpl','Users'), null, 0);?>
<?php $_smarty_tpl->tpl_vars["_CustomLoginTemplateFullPath"] = new Smarty_variable("layouts/vlayout/".($_smarty_tpl->tpl_vars['_CustomLoginTemplate']->value), null, 0);?>

<?php if (file_exists($_smarty_tpl->tpl_vars['_CustomLoginTemplateFullPath']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_CustomLoginTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_DefaultLoginTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?><?php }} ?>
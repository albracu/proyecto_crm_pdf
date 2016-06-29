<?php /* Smarty version Smarty-3.1.7, created on 2016-06-28 21:46:10
         compiled from "C:\wamp\www\vtigercolombia\novcali\includes\runtime/../../layouts/vlayout\modules\Vtiger\uitypes\SalutationDetailView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41975772f0224759e3-25199822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af5ff0131986d26feb9e8b2e318bb6e709759b62' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\novcali\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\uitypes\\SalutationDetailView.tpl',
      1 => 1467115961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41975772f0224759e3-25199822',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'FIELD_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5772f0225568e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5772f0225568e')) {function content_5772f0225568e($_smarty_tpl) {?>


<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('salutationtype');?>


<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);?>
<?php }} ?>
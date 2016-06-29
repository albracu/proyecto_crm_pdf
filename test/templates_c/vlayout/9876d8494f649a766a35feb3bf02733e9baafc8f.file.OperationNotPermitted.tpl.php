<?php /* Smarty version Smarty-3.1.7, created on 2016-06-28 21:38:04
         compiled from "C:\wamp\www\vtigercolombia\novcali\includes\runtime/../../layouts/vlayout\modules\Vtiger\OperationNotPermitted.tpl" */ ?>
<?php /*%%SmartyHeaderCode:270195772ee3c255e16-79218647%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9876d8494f649a766a35feb3bf02733e9baafc8f' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\novcali\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\OperationNotPermitted.tpl',
      1 => 1467115961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270195772ee3c255e16-79218647',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5772ee3c39dc9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5772ee3c39dc9')) {function content_5772ee3c39dc9($_smarty_tpl) {?>
<div style="margin:0 auto;width: 50em;">
	<table border='0' cellpadding='5' cellspacing='0' height='600px' width="700px">
	<tr><td align='center'>
		<div style='border: 3px solid rgb(153, 153, 153); background-color: rgb(255, 255, 255); width: 80%; position: relative; z-index: 100000020;'>

		<table border='0' cellpadding='5' cellspacing='0' width='98%'>
		<tr>
			<td rowspan='2' width='11%'><img src="<?php echo vimage_path('denied.gif');?>
" ></td>
			<td style='border-bottom: 1px solid rgb(204, 204, 204);' nowrap='nowrap' width='70%'>
				<span class='genHeaderSmall'><?php echo vtranslate($_smarty_tpl->tpl_vars['MESSAGE']->value);?>
</span></td>
		</tr>
		<tr>
			<td class='small' align='right' nowrap='nowrap'>
				<a href='javascript:window.history.back();'><?php echo vtranslate('LBL_GO_BACK');?>
</a><br>
			</td>
		</tr>
		</table>
		</div>
	</td></tr>
	</table>
</div><?php }} ?>
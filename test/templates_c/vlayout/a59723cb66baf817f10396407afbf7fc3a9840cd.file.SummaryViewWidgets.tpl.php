<?php /* Smarty version Smarty-3.1.7, created on 2016-06-28 21:46:10
         compiled from "C:\wamp\www\vtigercolombia\novcali\includes\runtime/../../layouts/vlayout\modules\Vtiger\SummaryViewWidgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199375772f022f0bab6-71830335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a59723cb66baf817f10396407afbf7fc3a9840cd' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\novcali\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\SummaryViewWidgets.tpl',
      1 => 1467115961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199375772f022f0bab6-71830335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_SUMMARY' => 0,
    'DETAILVIEW_LINKS' => 0,
    'DETAIL_VIEW_WIDGET' => 0,
    'MODULE_NAME' => 0,
    'RELATED_ACTIVITIES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5772f02339d4a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5772f02339d4a')) {function content_5772f02339d4a($_smarty_tpl) {?>
<?php if (!empty($_smarty_tpl->tpl_vars['MODULE_SUMMARY']->value)){?><div class="row-fluid"><div class="span7"><div class="summaryView row-fluid"><?php echo $_smarty_tpl->tpl_vars['MODULE_SUMMARY']->value;?>
</div><?php }?><?php  $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWWIDGET']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->key => $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value){
$_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['index']++;
?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index']%2==0){?><div class="summaryWidgetContainer"><div class="widgetContainer_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getUrl();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getLabel();?>
"><div class="widget_header row-fluid"><span class="span8 margin0px"><h4><?php echo vtranslate($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4></span></div><div class="widget_contents"></div></div></div><?php }?><?php } ?></div><div class="span5" style="overflow: hidden"><div id="relatedActivities"><?php echo $_smarty_tpl->tpl_vars['RELATED_ACTIVITIES']->value;?>
</div><?php  $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWWIDGET']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->key => $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value){
$_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['index']++;
?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index']%2!=0){?><div class="summaryWidgetContainer"><div class="widgetContainer_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getUrl();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getLabel();?>
"><div class="widget_header row-fluid"><span class="span8 margin0px"><h4><?php echo vtranslate($_smarty_tpl->tpl_vars['DETAIL_VIEW_WIDGET']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h4></span></div><div class="widget_contents"></div></div></div><?php }?><?php } ?></div></div><?php }} ?>
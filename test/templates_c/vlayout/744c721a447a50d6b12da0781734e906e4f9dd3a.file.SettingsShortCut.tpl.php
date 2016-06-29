<?php /* Smarty version Smarty-3.1.7, created on 2016-06-28 22:36:23
         compiled from "C:\wamp\www\vtigercolombia\novcali\includes\runtime/../../layouts/vlayout\modules\Settings\Vtiger\SettingsShortCut.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17025772fbe79714b9-66035701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '744c721a447a50d6b12da0781734e906e4f9dd3a' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\novcali\\includes\\runtime/../../layouts/vlayout\\modules\\Settings\\Vtiger\\SettingsShortCut.tpl',
      1 => 1467115960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17025772fbe79714b9-66035701',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SETTINGS_SHORTCUT' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5772fbe7b49c6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5772fbe7b49c6')) {function content_5772fbe7b49c6($_smarty_tpl) {?>
<span id="shortcut_<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getId();?>
" data-actionurl="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getPinUnpinActionUrl();?>
" class="span3 contentsBackground well cursorPointer moduleBlock" data-url="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getUrl();?>
"><button data-id="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getId();?>
" title="<?php echo vtranslate('LBL_REMOVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" style="margin-right: -2%;margin-top: -5%;" title="Close" type="button" class="unpin close hide">x</button><h5 class="themeTextColor"><?php echo vtranslate($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('name'),$_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getModuleNameFromUrl($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('linkto')));?>
</h5><div><?php echo vtranslate($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('description'),$_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getModuleNameFromUrl($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('linkto')));?>
</div></span>	<?php }} ?>
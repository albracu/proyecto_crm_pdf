<?php /* Smarty version Smarty-3.1.7, created on 2016-06-29 19:24:48
         compiled from "C:\wamp\www\vtigercolombia\novcali\includes\runtime/../../layouts/vlayout\modules\Quotes\ExportPDF.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31066577419383960a5-56141447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb776b9756858e4dcea53246227b1a80e2579d59' => 
    array (
      0 => 'C:\\wamp\\www\\vtigercolombia\\novcali\\includes\\runtime/../../layouts/vlayout\\modules\\Quotes\\ExportPDF.tpl',
      1 => 1467227858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31066577419383960a5-56141447',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_577419386a959',
  'variables' => 
  array (
    'RELATED_PRODUCTS' => 0,
    'ACCOUNT_NAME' => 0,
    'CONTACT_NAME' => 0,
    'FECHA' => 0,
    'FIELDS' => 0,
    'LINE_ITEM_DETAIL' => 0,
    'LINEAS' => 0,
    'FINAL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577419386a959')) {function content_577419386a959($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['FINAL'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_PRODUCTS']->value[1]['final_details'], null, 0);?>

<hr />
<span style="font-family:verdana;">
Cliente: <?php echo $_smarty_tpl->tpl_vars['ACCOUNT_NAME']->value;?>
<br />
Atencion: <?php echo $_smarty_tpl->tpl_vars['CONTACT_NAME']->value;?>
<br />
Fecha: <?php echo $_smarty_tpl->tpl_vars['FECHA']->value;?>
<br />
Cotización No: <?php echo $_smarty_tpl->tpl_vars['FIELDS']->value['quote_no'];?>
<br />
</span>
<br/>
<br/>
<br/>
<table cellpadding="0" cellspacing="0" style="height:500px;width:100%;">
	<tbody>
		<tr>
			<td style="width:15%;border:1px solid"><span style="font-size:12px;"><span style="font-family:verdana;"><span style="font-weight: bold;">Partida</span></span></span></td>
			<td style="width:15%;border:1px solid"><span style="font-size:12px;"><span style="font-family:verdana;"><span style="font-weight: bold;">Cantidad</span></span></span></td>
			<td style="width:40%;border:1px solid"><span style="font-size:12px;"><span style="font-family:verdana;"><span style="font-weight: bold;">No Parte/Descripción</span></span></span></td>
			<td style="width:15%;border:1px solid"><span style="font-size:12px;"><span style="font-family:verdana;"><span style="font-weight: bold;">P. Unitario</span></span></span></td>
			<td style="width:15%;border:1px solid"><span style="font-size:12px;"><span style="font-family:verdana;"><span style="font-weight: bold;">Importe</span></span></span></td>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->_loop = false;
 $_smarty_tpl->tpl_vars['INDEX'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RELATED_PRODUCTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->key => $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value){
$_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->_loop = true;
 $_smarty_tpl->tpl_vars['INDEX']->value = $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->key;
?>
		<tr>
			<td style="width:15%;border-left:1px solid;border-right:1px solid"><span style="font-family:verdana;"><?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["hdnProductcode".($_smarty_tpl->tpl_vars['INDEX']->value)];?>
</span></td>
			<td style="width:15%;border-left:1px solid;border-right:1px solid"><span style="font-family:verdana;"><?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["qty".($_smarty_tpl->tpl_vars['INDEX']->value)];?>
</span></td>
			<td style="width:40%;border-left:1px solid;border-right:1px solid"><span style="font-family:verdana;"><?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["productName".($_smarty_tpl->tpl_vars['INDEX']->value)];?>
</span></td>
			<td style="width:15%;border-left:1px solid;border-right:1px solid;text-align:right;"><span style="font-family:verdana;"><?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["listPrice".($_smarty_tpl->tpl_vars['INDEX']->value)];?>
</span></td>
			<td style="width:15%;border-left:1px solid;border-right:1px solid;text-align:right;"><span style="font-family:verdana;"><?php echo $_smarty_tpl->tpl_vars['LINE_ITEM_DETAIL']->value["netPrice".($_smarty_tpl->tpl_vars['INDEX']->value)];?>
</span></td>
		</tr>
		<?php } ?>
		<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['LINEAS']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['LINEAS']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
		<tr>
			<td style="border-left:1px solid;border-right:1px solid;"><span style="font-family:verdana;">&nbsp;</span></td>
			<td style="border-left:1px solid;border-right:1px solid;"><span style="font-family:verdana;">&nbsp;</span></td>
			<td style="border-left:1px solid;border-right:1px solid;"><span style="font-family:verdana;">&nbsp;</span></td>
			<td style="border-left:1px solid;border-right:1px solid;"><span style="font-family:verdana;">&nbsp;</span></td>
			<td style="border-left:1px solid;border-right:1px solid;"><span style="font-family:verdana;">&nbsp;</span></td>
		</tr>
		<?php }} ?>
		<tr>
			<td style="border-left:1px solid;border-right:1px solid;border-bottom:1px solid;"><span style="font-family:verdana;">&nbsp;</span></td>
			<td style="border-left:1px solid;border-right:1px solid;border-bottom:1px solid;"><span style="font-family:verdana;">&nbsp;</span></td>
			<td style="border-left:1px solid;border-right:1px solid;border-bottom:1px solid;"><span style="font-family:verdana;">&nbsp;</span></td>
			<td style="border-left:1px solid;border-right:1px solid;border-bottom:1px solid;"><span style="font-family:verdana;">&nbsp;</span></td>
			<td style="border-left:1px solid;border-right:1px solid;border-bottom:1px solid;"><span style="font-family:verdana;">&nbsp;</span></td>
		</tr>
		<tr>
			<td colspan="3" style="font-family:verdana;"><strong>NOTAS IMPORTANTES</strong></td><td></td><td></td>
		</tr>
		<tr>
			<td colspan="3" rowspan="4" style="font-family:verdana;border:1px solid;margin-left:20px;">1. PRECIOS EN MONEDA NACIONAL, SUJETOS A CAMBIO SIN PREVIO AVISO Y POR TIPO DE CAMBIO.<br/>
			2. TIEMPO DE ENTREGA: INMEDIADO<br/>
			3. FORMA DE PAGO: CONTADO<br/></td>
			<td style="border-left:1px solid;border-top:1px solid;"><span style="font-size:12px;"><span style="font-family:verdana;">SUBTOTAL</span></span></td>
			<td style="border-right:1px solid;border-top:1px solid;text-align:right"><span style="font-size:12px;"><span style="font-family:verdana;"><?php if (!empty($_smarty_tpl->tpl_vars['FINAL']->value['hdnSubTotal'])){?><?php echo $_smarty_tpl->tpl_vars['FINAL']->value['hdnSubTotal'];?>
<?php }else{ ?>0.00<?php }?></span></span></td>
		</tr>
		<tr>
			<td style="border-left:1px solid;"><span style="font-size:12px;"><span style="font-family:verdana;">I.V.A.</span></span></td>
			<td style="border-right:1px solid;text-align:right"><span style="font-size:12px;"><span style="font-family:verdana;"><?php echo $_smarty_tpl->tpl_vars['FINAL']->value['tax_totalamount'];?>
</span></span></span></td>
		</tr>
		<tr>
			<td style="border-left:1px solid;"><span style="color:#696969;">&nbsp;</td>
			<td style="border-right:1px solid;text-align:right"><span style="font-size:12px;">&nbsp;</td>
		</tr>
		<tr>
			<td style="border-left:1px solid;border-top:1px solid;border-bottom:1px solid;"><span style="font-size:12px;"><span style="font-family:verdana;">TOTAL MN</span></span></td>
			<td style="border-right:1px solid;border-top:1px solid;border-bottom:1px solid;text-align:right"><span style="font-size:12px;"><span style="font-size:12px;"><span style="font-family:verdana;"><?php echo $_smarty_tpl->tpl_vars['FINAL']->value["grandTotal"];?>
</span></span></span></td>
		</tr>
	</tbody>
</table>
<?php }} ?>
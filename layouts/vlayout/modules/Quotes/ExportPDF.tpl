{assign var=FINAL value=$RELATED_PRODUCTS.1.final_details}

<hr />
<span style="font-family:verdana;">
Cliente: {$ACCOUNT_NAME}<br />
Atencion: {$CONTACT_NAME}<br />
Fecha: {$FECHA}<br />
Cotización No: {$FIELDS.quote_no}<br />
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
		{foreach key=INDEX item=LINE_ITEM_DETAIL from=$RELATED_PRODUCTS}
		<tr>
			<td style="width:15%;border-left:1px solid;border-right:1px solid"><span style="font-family:verdana;">{$LINE_ITEM_DETAIL["hdnProductcode$INDEX"]}</span></td>
			<td style="width:15%;border-left:1px solid;border-right:1px solid"><span style="font-family:verdana;">{$LINE_ITEM_DETAIL["qty$INDEX"]}</span></td>
			<td style="width:40%;border-left:1px solid;border-right:1px solid"><span style="font-family:verdana;">{$LINE_ITEM_DETAIL["productName$INDEX"]}</span></td>
			<td style="width:15%;border-left:1px solid;border-right:1px solid;text-align:right;"><span style="font-family:verdana;">{$LINE_ITEM_DETAIL["listPrice$INDEX"]}</span></td>
			<td style="width:15%;border-left:1px solid;border-right:1px solid;text-align:right;"><span style="font-family:verdana;">{$LINE_ITEM_DETAIL["netPrice$INDEX"]}</span></td>
		</tr>
		{/foreach}
		{for $foo=1 to $LINEAS}
		<tr>
			<td style="border-left:1px solid;border-right:1px solid;"><span style="font-family:verdana;">&nbsp;</span></td>
			<td style="border-left:1px solid;border-right:1px solid;"><span style="font-family:verdana;">&nbsp;</span></td>
			<td style="border-left:1px solid;border-right:1px solid;"><span style="font-family:verdana;">&nbsp;</span></td>
			<td style="border-left:1px solid;border-right:1px solid;"><span style="font-family:verdana;">&nbsp;</span></td>
			<td style="border-left:1px solid;border-right:1px solid;"><span style="font-family:verdana;">&nbsp;</span></td>
		</tr>
		{/for}
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
			<td style="border-right:1px solid;border-top:1px solid;text-align:right"><span style="font-size:12px;"><span style="font-family:verdana;">{if !empty($FINAL.hdnSubTotal)}{$FINAL.hdnSubTotal}{else}0.00{/if}</span></span></td>
		</tr>
		<tr>
			<td style="border-left:1px solid;"><span style="font-size:12px;"><span style="font-family:verdana;">I.V.A.</span></span></td>
			<td style="border-right:1px solid;text-align:right"><span style="font-size:12px;"><span style="font-family:verdana;">{$FINAL['tax_totalamount']}</span></span></span></td>
		</tr>
		<tr>
			<td style="border-left:1px solid;"><span style="color:#696969;">&nbsp;</td>
			<td style="border-right:1px solid;text-align:right"><span style="font-size:12px;">&nbsp;</td>
		</tr>
		<tr>
			<td style="border-left:1px solid;border-top:1px solid;border-bottom:1px solid;"><span style="font-size:12px;"><span style="font-family:verdana;">TOTAL MN</span></span></td>
			<td style="border-right:1px solid;border-top:1px solid;border-bottom:1px solid;text-align:right"><span style="font-size:12px;"><span style="font-size:12px;"><span style="font-family:verdana;">{$FINAL["grandTotal"]}</span></span></span></td>
		</tr>
	</tbody>
</table>

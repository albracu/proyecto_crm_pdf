<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

require_once('libraries/mpdf/mpdf.php');

class Quotes_ExportPDF_Action extends Vtiger_Action_Controller {
	
	public function checkPermission(Vtiger_Request $request) {
		$moduleName = $request->getModule();
		$recordId = $request->get('record');

		if(!Users_Privileges_Model::isPermitted($moduleName, 'DetailView', $recordId)) {
			throw new AppException(vtranslate('LBL_PERMISSION_DENIED', $moduleName));
		}
	}
	
	public function process(Vtiger_Request $request) {
		$viewer = new Vtiger_Viewer;
		
		$moduleName = $request->getModule();
		$record = $request->get('record');
		
		$recordModel = Vtiger_Record_Model::getInstanceById($record);
		$recordStrucure = Vtiger_RecordStructure_Model::getInstanceFromRecordModel($recordModel, Vtiger_RecordStructure_Model::RECORD_STRUCTURE_MODE_DETAIL);
		$structuredValues = $recordStrucure->getStructure();
		
		$record = $_REQUEST['record'];
		$recordModel = Inventory_Record_Model::getInstanceById($record);
		$relatedProducts = $recordModel->getProducts();

		//##Final details convertion started
		$finalDetails = $relatedProducts[1]['final_details'];

		//Final tax details convertion started
		$taxtype = $finalDetails['taxtype'];
		if ($taxtype == 'group') {
			$taxDetails = $finalDetails['taxes'];
			$taxCount = count($taxDetails);
			for($i=0; $i<$taxCount; $i++) {
				$taxDetails[$i]['amount'] = Vtiger_Currency_UIType::transformDisplayValue($taxDetails[$i]['amount'], null, true);
			}
			$finalDetails['taxes'] = $taxDetails;
		}
		//Final tax details convertion ended

		//Final shipping tax details convertion started
		$shippingTaxDetails = $finalDetails['sh_taxes'];
		$taxCount = count($shippingTaxDetails);
		for($i=0; $i<$taxCount; $i++) {
			$shippingTaxDetails[$i]['amount'] = Vtiger_Currency_UIType::transformDisplayValue($shippingTaxDetails[$i]['amount'], null, true);
		}
		$finalDetails['sh_taxes'] = $shippingTaxDetails;
		//Final shipping tax details convertion ended

		$currencyFieldsList = array('adjustment', 'grandTotal', 'hdnSubTotal', 'preTaxTotal', 'tax_totalamount',
									'shtax_totalamount', 'discountTotal_final', 'discount_amount_final', 'shipping_handling_charge', 'totalAfterDiscount');
		foreach ($currencyFieldsList as $fieldName) {
			$finalDetails[$fieldName] = Vtiger_Currency_UIType::transformDisplayValue($finalDetails[$fieldName], null, true);
		}

		$relatedProducts[1]['final_details'] = $finalDetails;
		//##Final details convertion ended

		//##Product details convertion started
		$productsCount = count($relatedProducts);
		for ($i=1; $i<=$productsCount; $i++) {
			$product = $relatedProducts[$i];

			//Product tax details convertion started
			if ($taxtype == 'individual') {
				$taxDetails = $product['taxes'];
				$taxCount = count($taxDetails);
				for($j=0; $j<$taxCount; $j++) {
					$taxDetails[$j]['amount'] = Vtiger_Currency_UIType::transformDisplayValue($taxDetails[$j]['amount'], null, true);
				}
				$product['taxes'] = $taxDetails;
			}
			//Product tax details convertion ended

			$currencyFieldsList = array('taxTotal', 'netPrice', 'listPrice', 'unitPrice', 'productTotal',
										'discountTotal', 'discount_amount', 'totalAfterDiscount');
			foreach ($currencyFieldsList as $fieldName) {
				$product[$fieldName.$i] = Vtiger_Currency_UIType::transformDisplayValue($product[$fieldName.$i], null, true);
			}

			$relatedProducts[$i] = $product;
		}
		
		$viewer->assign('RELATED_PRODUCTS', $relatedProducts);			
		
		
		$fecha =  date('Y-m-d');
		$accountModel = Vtiger_Record_Model::getInstanceById($recordModel->get('account_id'));
		$contactModel = Vtiger_Record_Model::getInstanceById($recordModel->get('contact_id'));
		$viewer->assign('ACCOUNT_NAME', $accountModel->get('accountname'));
		$viewer->assign('CONTACT_NAME', $contactModel->get('firstname').' '.$contactModel->get('lastname') );
		$viewer->assign('FECHA',  DateTimeField::convertToUserFormat($fecha));
		$viewer->assign('USER_MODEL', Users_Record_Model::getCurrentUserModel());
		$viewer->assign('LINEAS', (30-count($relatedProducts)));
		
	
		$buffer = $viewer->view('ExportPDF.tpl', $moduleName,true);
		
		$org = getCompanyDetails();
		
		$header = '<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
					<tbody>
						<tr>
							<td width="50%"><span style="font-family:tahoma,geneva,sans-serif;"><img height="100" src="test/logo/'.$org['logoname'].'" width="300" /></span></td>
							<td style="text-align: right;" width="50%"><span style="font-family:tahoma,geneva,sans-serif;">'.$org['address'].'<br />
							'.$org['city'].' - '.$org['state'].'<br />
							'.$org['country'].'<br />
							'.$org['website'].'<br />
							'.$org['phone'].'</span></td>
						</tr>
					</tbody>
				</table>';
		$footer = '';
	
		
		$mpdf=new mPDF('','', 0, '', 15, 15, 16, 16, 9, 9);
		$mpdf->useSubstitutions = true; // optional - just as an example
		$mpdf->setAutoTopMargin = 'stretch'; 
		$mpdf->setAutoBottomMargin = 'stretch'; 
		$mpdf->SetHTMLHeader ($header);  // optional - just as an example
		$mpdf->SetHTMLFooter ($footer);
		$mpdf->setBasePath($url);
		$mpdf->WriteHTML($buffer);
		$mpdf->Output();
		exit;
	}
}

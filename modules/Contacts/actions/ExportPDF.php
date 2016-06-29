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

class Contacts_ExportPDF_Action extends Vtiger_Action_Controller {
	
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
		
		$accountModel = Vtiger_Record_Model::getInstanceById($recordModel->get('account_id'));
		$viewer->assign('ACCOUNT_NAME', $accountModel->get('accountname'));
		$viewer->assign('CONTACT_NAME', $recordModel->get('firstname').' '.$recordModel->get('lastname') );
		
		$viewer->assign('USER_MODEL', Users_Record_Model::getCurrentUserModel());
	
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
		$footer = '<div style="text-align:right;width:100%;border-top:1px solid #000000;">Impreso el: '.date('d-m-Y').'</div>';
	
		
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

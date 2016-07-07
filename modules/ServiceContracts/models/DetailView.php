<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

//Same as Accounts Detail View
class ServiceContracts_DetailView_Model extends Vtiger_DetailView_Model {
	
	public function getDetailViewLinks($linkParams) {
		$linkModelList = parent::getDetailViewLinks($linkParams);
		$recordModel = $this->getRecord();
		$moduleName = $recordModel->getmoduleName();

		if(Users_Privileges_Model::isPermitted($moduleName, 'DetailView', $recordModel->getId())) {
			$url = "index.php?module=".$recordModel->getModuleName()."&action=ExportPDF&record=".$recordModel->getId();
			$detailViewLinks = array( 
							'linklabel' => vtranslate('Exportar Contrato', $moduleName), 
							'linkurl' => $url,
							'linkicon' => '' 
			); 
			$linkModelList['DETAILVIEW'][] = Vtiger_Link_Model::getInstanceFromValues($detailViewLinks); 
		}

		return $linkModelList;
	}
	
}

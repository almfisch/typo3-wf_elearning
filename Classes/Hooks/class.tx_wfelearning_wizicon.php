<?php

class tx_wfelearning_wizicon
{
	/**
    * Processing the wizard items array
    *
    * @param array $wizardItems The wizard items
    * @return array Modified array with wizard items
    */
    function proc($wizardItems)
    {
    	$wizardItems['plugins_tx_wfelearning'] = array(
        	'icon' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('wf_elearning') . 'Resources/Public/Icons/tx_wfelearning_domain_model_wizard.gif',
            'title' => $GLOBALS['LANG']->sL('LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_ext_title'),
            'description' => $GLOBALS['LANG']->sL('LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_ext_description'),
            'params'=>'&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=wfelearning_learnfront'
        );

        return $wizardItems;
    }
}

?>

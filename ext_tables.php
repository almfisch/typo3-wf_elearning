<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	$_EXTKEY,
	'Learnfront',
	'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_modul_learnfront'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'TYPO3 eLearning Tool');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wfelearning_domain_model_cat', 'EXT:wf_elearning/Resources/Private/Language/locallang_csh_tx_wfelearning_domain_model_cat.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wfelearning_domain_model_cat');
$TCA['tx_wfelearning_domain_model_cat'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_cat',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		//'sortby' => 'sorting',
		'default_sortby' => 'ORDER BY title ASC',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'rootLevel' => 0,
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
			'fe_group' => 'fe_group',
		),
		'searchFields' => 'title,parent_cat,description,fe_group,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Cat.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_wfelearning_domain_model_cat.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wfelearning_domain_model_question', 'EXT:wf_elearning/Resources/Private/Language/locallang_csh_tx_wfelearning_domain_model_question.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wfelearning_domain_model_question');
$TCA['tx_wfelearning_domain_model_question'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_question',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		//'sortby' => 'sorting',
		'default_sortby' => 'ORDER BY title ASC',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'rootLevel' => 0,
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'requestUpdate' => 'type',
		'searchFields' => 'title,cat_id,type,description,points,q1,a1,c1,c2,c3,img_drag,img_drop,c4,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Question.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_wfelearning_domain_model_question.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_wfelearning_domain_model_save', 'EXT:wf_elearning/Resources/Private/Language/locallang_csh_tx_wfelearning_domain_model_save.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_wfelearning_domain_model_save');
$TCA['tx_wfelearning_domain_model_save'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_save',
		'label' => 'user_id',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'rootLevel' => 0,
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'user_id,cat_id,question_id,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Save.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_wfelearning_domain_model_save.gif'
	),
);


$extensionName = t3lib_div::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_learnfront';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/flexform_learnfront.xml');


if (TYPO3_MODE == 'BE')
{
	$TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['tx_wfelearning_wizicon'] = t3lib_extMgm::extPath($_EXTKEY).'Classes/Hooks/class.tx_wfelearning_wizicon.php';
}

?>

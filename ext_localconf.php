<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'TYPO3.' . $_EXTKEY,
	'Learnfront',
	array(
		'Question' => 'show',
	),
	// non-cacheable actions
	array(
		'Question' => 'show',
	)
);

$TYPO3_CONF_VARS['EXTCONF']['cms']['db_layout']['addTables']['tx_wfelearning_domain_model_cat'][0] = array(
    'fList' => 'uid, title, parent_cat, fe_group',
    'icon' => TRUE
);
$TYPO3_CONF_VARS['EXTCONF']['cms']['db_layout']['addTables']['tx_wfelearning_domain_model_question'][0] = array(
    'fList' => 'title, cat_id, type',
    'icon' => TRUE
);
$TYPO3_CONF_VARS['EXTCONF']['cms']['db_layout']['addTables']['tx_wfelearning_domain_model_save'][0] = array(
    'fList' => 'user_id, cat_id, question_id',
    'icon' => TRUE
);

?>
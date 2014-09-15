<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_wfelearning_domain_model_question'] = array(
	'ctrl' => $TCA['tx_wfelearning_domain_model_question']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, type, cat_id, description, img_desc, video_desc, original_norm, points, q1, a1, c1, c2, c3, img_drag, img_drop, c4',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, type, cat_id, description, img_desc, video_desc, original_norm, points, q1, a1, c1, c2, c3, img_drag, img_drop, c4,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_wfelearning_domain_model_question',
				'foreign_table_where' => 'AND tx_wfelearning_domain_model_question.pid=###CURRENT_PID### AND tx_wfelearning_domain_model_question.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'title' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_question.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'type' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_question.type',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array(
                    	'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_question.type_1', 1,
                    ),
                    array(
                    	'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_question.type_2', 2,
                    ),
                    array(
                    	'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_question.type_3', 3,
                    ),
                    array(
                    	'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_question.type_4', 4,
                    ),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => 'required'
			),
		),
		'cat_id' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_question.cat_id',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_wfelearning_domain_model_cat',
				'foreign_table_where' => ' AND tx_wfelearning_domain_model_cat.pid = ###CURRENT_PID###',
				'renderMode' => 'tree',
				'subType' => 'db',
				'treeConfig' => array(
					'parentField' => 'parent_cat',
					'appearance' => array(
						'expandAll' => TRUE,
						'showHeader' => FALSE,
						'maxLevels' => 99,
					),
				),
				'size' => 10,
				'autoSizeMax' => 20,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'description' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_question.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'img_desc' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_question.img_desc',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file_reference',
				'uploadfolder' => 'uploads/tx_wfelearning',
				'show_thumbs' => 1,
				'allowed' => 'jpg,jpeg,png,gif',
				'disallowed' => 'php',
				'minitems' => 0,
				'maxitems' => 1,
				'size' => 1,
				'disable_controls' => 'upload'
			),
		),
		'video_desc' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_question.video_desc',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'original_norm' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_question.original_norm',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
			'defaultExtras' => 'richtext:rte_transform[flag=rte_enabled|mode=ts]',
		),
		'points' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_question.points',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			),
		),
		'q1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_question.q1',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim,required',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
			'defaultExtras' => 'richtext:rte_transform[flag=rte_enabled|mode=ts]',
		),
		'a1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_question.a1',
			'displayCond' => 'FIELD:type:IN:,1',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim,required'
			),
		),
		'c1' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_question.c1',
			'displayCond' => 'FIELD:type:IN:,1',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'c2' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_question.c2',
			'displayCond' => 'FIELD:type:IN:2',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'c3' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_question.c3',
			'displayCond' => 'FIELD:type:IN:3',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim,required'
			),
		),
		'img_drag' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_question.img_drag',
			'displayCond' => 'FIELD:type:IN:4',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file_reference',
				'uploadfolder' => 'uploads/tx_wfelearning',
				'show_thumbs' => 1,
				'size' => 1,
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'disallowed' => '',
				'minitems' => 1,
				'maxitems' => 1,
				'disable_controls' => 'upload'
			),
		),
		'img_drop' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_question.img_drop',
			'displayCond' => 'FIELD:type:IN:4',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file_reference',
				'uploadfolder' => 'uploads/tx_wfelearning',
				'show_thumbs' => 1,
				'size' => 5,
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'disallowed' => '',
				'minitems' => 1,
				'maxitems' => 10,
				'disable_controls' => 'upload'
			),
		),
		'c4' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_question.c4',
			'displayCond' => 'FIELD:type:IN:4',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
	),
);

?>

<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_wfelearning_domain_model_cat'] = array(
	'ctrl' => $TCA['tx_wfelearning_domain_model_cat']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, parent_cat, description, fe_group',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, parent_cat, description, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime, fe_group'),
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
				'foreign_table' => 'tx_wfelearning_domain_model_cat',
				'foreign_table_where' => 'AND tx_wfelearning_domain_model_cat.pid=###CURRENT_PID### AND tx_wfelearning_domain_model_cat.sys_language_uid IN (-1,0)',
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
			'label' => 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_cat.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'parent_cat' => array(
			'exclude' => 0,
			'l10n_mode' => 'exclude',
			'label' => 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_cat.parent_cat',
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
			'label' => 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_cat.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'fe_group' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:wf_elearning/Resources/Private/Language/locallang_db.xlf:tx_wfelearning_domain_model_cat.fe_group',
			'config' => array(
                'type' => 'select',
                'size' => 5,
                'maxitems' => 20,
                'items' => array(
                	array(
                    	'LLL:EXT:lang/locallang_general.xlf:LGL.hide_at_login', -1,
                    ),
                    array(
                    	'LLL:EXT:lang/locallang_general.xlf:LGL.any_login', -2,
                    ),
                    array(
                    	'LLL:EXT:lang/locallang_general.xlf:LGL.usergroups', '--div--',
                    ),
                ),
                'exclusiveKeys' => '-1, -2',
                'foreign_table' => 'fe_groups',
                'foreign_table_where' => 'ORDER BY fe_groups.title',
        	),
		),
	),
);

?>

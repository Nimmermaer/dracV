<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'dracV');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dracv_domain_model_organization', 'EXT:dracv/Resources/Private/Language/locallang_csh_tx_dracv_domain_model_organization.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dracv_domain_model_organization');
$GLOBALS['TCA']['tx_dracv_domain_model_organization'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_organization',
		'label' => 'corporate_company_logo',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'corporate_company_logo,corporate_company_name,adress,town,www,description,phone,contact,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Organization.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dracv_domain_model_organization.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dracv_domain_model_related', 'EXT:dracv/Resources/Private/Language/locallang_csh_tx_dracv_domain_model_related.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dracv_domain_model_related');
$GLOBALS['TCA']['tx_dracv_domain_model_related'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_related',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,uuid,email,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Related.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dracv_domain_model_related.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dracv_domain_model_role', 'EXT:dracv/Resources/Private/Language/locallang_csh_tx_dracv_domain_model_role.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dracv_domain_model_role');
$GLOBALS['TCA']['tx_dracv_domain_model_role'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_role',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,position,description,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Role.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dracv_domain_model_role.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dracv_domain_model_sound', 'EXT:dracv/Resources/Private/Language/locallang_csh_tx_dracv_domain_model_sound.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dracv_domain_model_sound');
$GLOBALS['TCA']['tx_dracv_domain_model_sound'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_sound',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Sound.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dracv_domain_model_sound.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dracv_domain_model_version', 'EXT:dracv/Resources/Private/Language/locallang_csh_tx_dracv_domain_model_version.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dracv_domain_model_version');
$GLOBALS['TCA']['tx_dracv_domain_model_version'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_version',
		'label' => 'version_number',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'version_number,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Version.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dracv_domain_model_version.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dracv_domain_model_expertise', 'EXT:dracv/Resources/Private/Language/locallang_csh_tx_dracv_domain_model_expertise.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dracv_domain_model_expertise');
$GLOBALS['TCA']['tx_dracv_domain_model_expertise'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_expertise',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,description,level,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Expertise.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dracv_domain_model_expertise.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dracv_domain_model_hobby', 'EXT:dracv/Resources/Private/Language/locallang_csh_tx_dracv_domain_model_hobby.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dracv_domain_model_hobby');
$GLOBALS['TCA']['tx_dracv_domain_model_hobby'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_hobby',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,description,jobrelated,frequency,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Hobby.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dracv_domain_model_hobby.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dracv_domain_model_interest', 'EXT:dracv/Resources/Private/Language/locallang_csh_tx_dracv_domain_model_interest.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dracv_domain_model_interest');
$GLOBALS['TCA']['tx_dracv_domain_model_interest'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_interest',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,description,jobrelated,frequency,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Interest.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dracv_domain_model_interest.gif'
	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_dracv_domain_model_impp', 'EXT:dracv/Resources/Private/Language/locallang_csh_tx_dracv_domain_model_impp.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_dracv_domain_model_impp');
$GLOBALS['TCA']['tx_dracv_domain_model_impp'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_impp',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,url,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Impp.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_dracv_domain_model_impp.gif'
	),
);

if (!isset($GLOBALS['TCA']['fe_users']['ctrl']['type'])) {
	if (file_exists($GLOBALS['TCA']['fe_users']['ctrl']['dynamicConfigFile'])) {
		require_once($GLOBALS['TCA']['fe_users']['ctrl']['dynamicConfigFile']);
	}
	// no type field defined, so we define it here. This will only happen the first time the extension is installed!!
	$GLOBALS['TCA']['fe_users']['ctrl']['type'] = 'tx_extbase_type';
	$tempColumns = array();
	$tempColumns[$GLOBALS['TCA']['fe_users']['ctrl']['type']] = array(
		'exclude' => 1,
		'label'   => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv.tx_extbase_type',
		'config' => array(
			'type' => 'select',
			'items' => array(),
			'size' => 1,
			'maxitems' => 1,
		)
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $tempColumns, 1);
}

if (!isset($GLOBALS['TCA']['sys_category']['ctrl']['type'])) {
	if (file_exists($GLOBALS['TCA']['sys_category']['ctrl']['dynamicConfigFile'])) {
		require_once($GLOBALS['TCA']['sys_category']['ctrl']['dynamicConfigFile']);
	}
	// no type field defined, so we define it here. This will only happen the first time the extension is installed!!
	$GLOBALS['TCA']['sys_category']['ctrl']['type'] = 'tx_extbase_type';
	$tempColumns = array();
	$tempColumns[$GLOBALS['TCA']['sys_category']['ctrl']['type']] = array(
		'exclude' => 1,
		'label'   => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv.tx_extbase_type',
		'config' => array(
			'type' => 'select',
			'items' => array(),
			'size' => 1,
			'maxitems' => 1,
		)
	);
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_category', $tempColumns, 1);
}

$GLOBALS['TCA']['sys_category']['types']['Tx_Dracv_Categories']['showitem'] = $TCA['sys_category']['types']['1']['showitem'];
$GLOBALS['TCA']['sys_category']['types']['Tx_Dracv_Categories']['showitem'] .= ',--div--;LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_categories,';
$GLOBALS['TCA']['sys_category']['types']['Tx_Dracv_Categories']['showitem'] .= '';

$GLOBALS['TCA']['sys_category']['columns'][$TCA['sys_category']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:sys_category.tx_extbase_type.Tx_Dracv_Categories','Tx_Dracv_Categories');

$tmp_dracv_columns = array(

	'caladruri' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.caladruri',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'caluri' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.caluri',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'class' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.class',
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('-- Label --', 0),
			),
			'size' => 1,
			'maxitems' => 1,
			'eval' => ''
		),
	),
	'clientpidmap' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.clientpidmap',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'fburl' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.fburl',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'fn' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.fn',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'geolatitude' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.geolatitude',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'geolongitude' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.geolongitude',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'vcard_key' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.vcard_key',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'kind' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.kind',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'mailer' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.mailer',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'member' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.member',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'n' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.n',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'note' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.note',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'photo' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.photo',
		'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
			'photo',
			array('maxitems' => 1),
			$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
		),
	),
	'prodid' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.prodid',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'profile' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.profile',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'sortstring' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.sortstring',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'source' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.source',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'timezone' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.timezone',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'xml' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.xml',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'birthplace' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.birthplace',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'deathdate' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.deathdate',
		'config' => array(
			'dbType' => 'datetime',
			'type' => 'input',
			'size' => 12,
			'eval' => 'datetime',
			'checkbox' => 0,
			'default' => '0000-00-00 00:00:00'
		),
	),
	'deathplace' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.deathplace',
		'config' => array(
			'dbType' => 'datetime',
			'type' => 'input',
			'size' => 12,
			'eval' => 'datetime',
			'checkbox' => 0,
			'default' => '0000-00-00 00:00:00'
		),
	),
	'category' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.category',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'sys_category',
			'MM' => 'tx_dracv_vcard_categories_mm',
			'size' => 10,
			'autoSizeMax' => 30,
			'maxitems' => 9999,
			'multiple' => 0,
			'wizards' => array(
				'_PADDING' => 1,
				'_VERTICAL' => 1,
				'edit' => array(
					'type' => 'popup',
					'title' => 'Edit',
					'script' => 'wizard_edit.php',
					'icon' => 'edit2.gif',
					'popup_onlyOpenIfSelected' => 1,
					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				'add' => Array(
					'type' => 'script',
					'title' => 'Create new',
					'icon' => 'add.gif',
					'params' => array(
						'table' => 'sys_category',
						'pid' => '###CURRENT_PID###',
						'setValue' => 'prepend'
						),
					'script' => 'wizard_add.php',
				),
			),
		),
	),
	'agent' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.agent',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'fe_users',
			'MM' => 'tx_dracv_vcard_vcard_mm',
			'size' => 10,
			'autoSizeMax' => 30,
			'maxitems' => 9999,
			'multiple' => 0,
			'wizards' => array(
				'_PADDING' => 1,
				'_VERTICAL' => 1,
				'edit' => array(
					'type' => 'popup',
					'title' => 'Edit',
					'script' => 'wizard_edit.php',
					'icon' => 'edit2.gif',
					'popup_onlyOpenIfSelected' => 1,
					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				'add' => Array(
					'type' => 'script',
					'title' => 'Create new',
					'icon' => 'add.gif',
					'params' => array(
						'table' => 'fe_users',
						'pid' => '###CURRENT_PID###',
						'setValue' => 'prepend'
						),
					'script' => 'wizard_add.php',
				),
			),
		),
	),
	'organization' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.organization',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_dracv_domain_model_organization',
			'MM' => 'tx_dracv_vcard_organization_mm',
			'size' => 10,
			'autoSizeMax' => 30,
			'maxitems' => 9999,
			'multiple' => 0,
			'wizards' => array(
				'_PADDING' => 1,
				'_VERTICAL' => 1,
				'edit' => array(
					'type' => 'popup',
					'title' => 'Edit',
					'script' => 'wizard_edit.php',
					'icon' => 'edit2.gif',
					'popup_onlyOpenIfSelected' => 1,
					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				'add' => Array(
					'type' => 'script',
					'title' => 'Create new',
					'icon' => 'add.gif',
					'params' => array(
						'table' => 'tx_dracv_domain_model_organization',
						'pid' => '###CURRENT_PID###',
						'setValue' => 'prepend'
						),
					'script' => 'wizard_add.php',
				),
			),
		),
	),
	'related' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.related',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_dracv_domain_model_related',
			'MM' => 'tx_dracv_vcard_related_mm',
			'size' => 10,
			'autoSizeMax' => 30,
			'maxitems' => 9999,
			'multiple' => 0,
			'wizards' => array(
				'_PADDING' => 1,
				'_VERTICAL' => 1,
				'edit' => array(
					'type' => 'popup',
					'title' => 'Edit',
					'script' => 'wizard_edit.php',
					'icon' => 'edit2.gif',
					'popup_onlyOpenIfSelected' => 1,
					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				'add' => Array(
					'type' => 'script',
					'title' => 'Create new',
					'icon' => 'add.gif',
					'params' => array(
						'table' => 'tx_dracv_domain_model_related',
						'pid' => '###CURRENT_PID###',
						'setValue' => 'prepend'
						),
					'script' => 'wizard_add.php',
				),
			),
		),
	),
	'role' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.role',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_dracv_domain_model_role',
			'MM' => 'tx_dracv_vcard_role_mm',
			'size' => 10,
			'autoSizeMax' => 30,
			'maxitems' => 9999,
			'multiple' => 0,
			'wizards' => array(
				'_PADDING' => 1,
				'_VERTICAL' => 1,
				'edit' => array(
					'type' => 'popup',
					'title' => 'Edit',
					'script' => 'wizard_edit.php',
					'icon' => 'edit2.gif',
					'popup_onlyOpenIfSelected' => 1,
					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				'add' => Array(
					'type' => 'script',
					'title' => 'Create new',
					'icon' => 'add.gif',
					'params' => array(
						'table' => 'tx_dracv_domain_model_role',
						'pid' => '###CURRENT_PID###',
						'setValue' => 'prepend'
						),
					'script' => 'wizard_add.php',
				),
			),
		),
	),
	'sound' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.sound',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_dracv_domain_model_sound',
			'MM' => 'tx_dracv_vcard_sound_mm',
			'size' => 10,
			'autoSizeMax' => 30,
			'maxitems' => 9999,
			'multiple' => 0,
			'wizards' => array(
				'_PADDING' => 1,
				'_VERTICAL' => 1,
				'edit' => array(
					'type' => 'popup',
					'title' => 'Edit',
					'script' => 'wizard_edit.php',
					'icon' => 'edit2.gif',
					'popup_onlyOpenIfSelected' => 1,
					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				'add' => Array(
					'type' => 'script',
					'title' => 'Create new',
					'icon' => 'add.gif',
					'params' => array(
						'table' => 'tx_dracv_domain_model_sound',
						'pid' => '###CURRENT_PID###',
						'setValue' => 'prepend'
						),
					'script' => 'wizard_add.php',
				),
			),
		),
	),
	'version' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.version',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_dracv_domain_model_version',
			'MM' => 'tx_dracv_vcard_version_mm',
			'size' => 10,
			'autoSizeMax' => 30,
			'maxitems' => 9999,
			'multiple' => 0,
			'wizards' => array(
				'_PADDING' => 1,
				'_VERTICAL' => 1,
				'edit' => array(
					'type' => 'popup',
					'title' => 'Edit',
					'script' => 'wizard_edit.php',
					'icon' => 'edit2.gif',
					'popup_onlyOpenIfSelected' => 1,
					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				'add' => Array(
					'type' => 'script',
					'title' => 'Create new',
					'icon' => 'add.gif',
					'params' => array(
						'table' => 'tx_dracv_domain_model_version',
						'pid' => '###CURRENT_PID###',
						'setValue' => 'prepend'
						),
					'script' => 'wizard_add.php',
				),
			),
		),
	),
	'expertise' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.expertise',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_dracv_domain_model_expertise',
			'MM' => 'tx_dracv_vcard_expertise_mm',
			'size' => 10,
			'autoSizeMax' => 30,
			'maxitems' => 9999,
			'multiple' => 0,
			'wizards' => array(
				'_PADDING' => 1,
				'_VERTICAL' => 1,
				'edit' => array(
					'type' => 'popup',
					'title' => 'Edit',
					'script' => 'wizard_edit.php',
					'icon' => 'edit2.gif',
					'popup_onlyOpenIfSelected' => 1,
					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				'add' => Array(
					'type' => 'script',
					'title' => 'Create new',
					'icon' => 'add.gif',
					'params' => array(
						'table' => 'tx_dracv_domain_model_expertise',
						'pid' => '###CURRENT_PID###',
						'setValue' => 'prepend'
						),
					'script' => 'wizard_add.php',
				),
			),
		),
	),
	'hobby' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.hobby',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_dracv_domain_model_hobby',
			'MM' => 'tx_dracv_vcard_hobby_mm',
			'size' => 10,
			'autoSizeMax' => 30,
			'maxitems' => 9999,
			'multiple' => 0,
			'wizards' => array(
				'_PADDING' => 1,
				'_VERTICAL' => 1,
				'edit' => array(
					'type' => 'popup',
					'title' => 'Edit',
					'script' => 'wizard_edit.php',
					'icon' => 'edit2.gif',
					'popup_onlyOpenIfSelected' => 1,
					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				'add' => Array(
					'type' => 'script',
					'title' => 'Create new',
					'icon' => 'add.gif',
					'params' => array(
						'table' => 'tx_dracv_domain_model_hobby',
						'pid' => '###CURRENT_PID###',
						'setValue' => 'prepend'
						),
					'script' => 'wizard_add.php',
				),
			),
		),
	),
	'interest' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.interest',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_dracv_domain_model_interest',
			'MM' => 'tx_dracv_vcard_interest_mm',
			'size' => 10,
			'autoSizeMax' => 30,
			'maxitems' => 9999,
			'multiple' => 0,
			'wizards' => array(
				'_PADDING' => 1,
				'_VERTICAL' => 1,
				'edit' => array(
					'type' => 'popup',
					'title' => 'Edit',
					'script' => 'wizard_edit.php',
					'icon' => 'edit2.gif',
					'popup_onlyOpenIfSelected' => 1,
					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				'add' => Array(
					'type' => 'script',
					'title' => 'Create new',
					'icon' => 'add.gif',
					'params' => array(
						'table' => 'tx_dracv_domain_model_interest',
						'pid' => '###CURRENT_PID###',
						'setValue' => 'prepend'
						),
					'script' => 'wizard_add.php',
				),
			),
		),
	),
	'coworkers' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.coworkers',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'fe_users',
			'MM' => 'tx_dracv_vcard_coworkers_vcard_mm',
			'size' => 10,
			'autoSizeMax' => 30,
			'maxitems' => 9999,
			'multiple' => 0,
			'wizards' => array(
				'_PADDING' => 1,
				'_VERTICAL' => 1,
				'edit' => array(
					'type' => 'popup',
					'title' => 'Edit',
					'script' => 'wizard_edit.php',
					'icon' => 'edit2.gif',
					'popup_onlyOpenIfSelected' => 1,
					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				'add' => Array(
					'type' => 'script',
					'title' => 'Create new',
					'icon' => 'add.gif',
					'params' => array(
						'table' => 'fe_users',
						'pid' => '###CURRENT_PID###',
						'setValue' => 'prepend'
						),
					'script' => 'wizard_add.php',
				),
			),
		),
	),
	'impp' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard.impp',
		'config' => array(
			'type' => 'inline',
			'foreign_table' => 'tx_dracv_domain_model_impp',
			'foreign_field' => 'vcard',
			'maxitems'      => 9999,
			'appearance' => array(
				'collapseAll' => 0,
				'levelLinksPosition' => 'top',
				'showSynchronizationLink' => 1,
				'showPossibleLocalizationRecords' => 1,
				'showAllLocalizationLink' => 1
			),
		),

	),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users',$tmp_dracv_columns);

$GLOBALS['TCA']['fe_users']['types']['Tx_Dracv_Vcard']['showitem'] = $TCA['fe_users']['types']['0']['showitem'];
$GLOBALS['TCA']['fe_users']['types']['Tx_Dracv_Vcard']['showitem'] .= ',--div--;LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:tx_dracv_domain_model_vcard,';
$GLOBALS['TCA']['fe_users']['types']['Tx_Dracv_Vcard']['showitem'] .= 'caladruri, caluri, class, clientpidmap, fburl, fn, geolatitude, geolongitude, vcard_key, kind, mailer, member, n, note, photo, prodid, profile, sortstring, source, timezone, xml, birthplace, deathdate, deathplace, category, agent, organization, related, role, sound, version, expertise, hobby, interest, coworkers, impp';

$GLOBALS['TCA']['fe_users']['columns'][$TCA['fe_users']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:dracv/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.Tx_Dracv_Vcard','Tx_Dracv_Vcard');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('fe_users', $GLOBALS['TCA']['fe_users']['ctrl']['type'],'','after:' . $TCA['fe_users']['ctrl']['label']);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('sys_category', $GLOBALS['TCA']['sys_category']['ctrl']['type'],'','after:' . $TCA['sys_category']['ctrl']['label']);

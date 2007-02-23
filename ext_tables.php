<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

t3lib_extMgm::allowTableOnStandardPages('tx_guestbook_comment');

$TCA['tx_guestbook_comment'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:guestbook/locallang_db.xml:tx_guestbook_comment',		
		'label'     => 'uid',	
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'type' => 'type',	
		'default_sortby' => "ORDER BY crdate DESC",	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_guestbook_comment.gif',
	),
	'feInterface' => array (
		'fe_admin_fieldList' => 'hidden, author, author_email, author_url, author_ip, content, karma, agent, type, feuser_id, parent',
	)
);


t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key';


t3lib_extMgm::addPlugin(array('LLL:EXT:guestbook/locallang_db.xml:tt_content.list_type_pi1', $_EXTKEY.'_pi1'),'list_type');


if (TYPO3_MODE=='BE') {
	$TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['tx_guestbook_pi1_wizicon'] = t3lib_extMgm::extPath($_EXTKEY).'pi1/class.tx_guestbook_pi1_wizicon.php';
	$TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['tx_guestbook_pi2_wizicon'] = t3lib_extMgm::extPath($_EXTKEY).'pi2/class.tx_guestbook_pi2_wizicon.php';
}


t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi2']='layout,select_key';


t3lib_extMgm::addPlugin(array('LLL:EXT:guestbook/locallang_db.xml:tt_content.list_type_pi2', $_EXTKEY.'_pi2'),'list_type');


if (TYPO3_MODE=='BE')	{
	t3lib_extMgm::insertModuleFunction(
		'web_info',		
		'tx_guestbook_modfunc1',
		t3lib_extMgm::extPath($_EXTKEY).'modfunc1/class.tx_guestbook_modfunc1.php',
		'LLL:EXT:guestbook/locallang_db.xml:moduleFunction.tx_guestbook_modfunc1'
	);
}

t3lib_extMgm::addStaticFile($_EXTKEY,'static/guestbook_comments/', 'Guestbook / Comments');
?>
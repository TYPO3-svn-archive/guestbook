<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_guestbook_comment'] = array (
	'ctrl' => $TCA['tx_guestbook_comment']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'hidden,author,author_email,author_url,author_ip,content,karma,agent,type,feuser_id,parent'
	),
	'feInterface' => $TCA['tx_guestbook_comment']['feInterface'],
	'columns' => array (
		'hidden' => array (		
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array (
				'type'    => 'check',
				'default' => '0'
			)
		),
		'author' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:guestbook/locallang_db.xml:tx_guestbook_comment.author',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'required',
			)
		),
		'author_email' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:guestbook/locallang_db.xml:tx_guestbook_comment.author_email',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',
			)
		),
		'author_url' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:guestbook/locallang_db.xml:tx_guestbook_comment.author_url',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',
			)
		),
		'author_ip' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:guestbook/locallang_db.xml:tx_guestbook_comment.author_ip',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',
			)
		),
		'content' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:guestbook/locallang_db.xml:tx_guestbook_comment.content',		
			'config' => array (
				'type' => 'text',
				'wrap' => 'OFF',
				'cols' => '30',	
				'rows' => '5',
			)
		),
		'karma' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:guestbook/locallang_db.xml:tx_guestbook_comment.karma',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',	
				'eval' => 'double2',
			)
		),
		'agent' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:guestbook/locallang_db.xml:tx_guestbook_comment.agent',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',
			)
		),
		'type' => array (		
			'exclude' => 0,		
			'label' => 'LLL:EXT:guestbook/locallang_db.xml:tx_guestbook_comment.type',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',
			)
		),
		'feuser_id' => array (		
			'config' => array (
				'type' => 'passthrough',
			)
		),
		'parent' => array (		
			'config' => array (
				'type' => 'passthrough',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'hidden;;1;;1-1-1, author, author_email, author_url, author_ip, content, karma, agent, type, feuser_id, parent')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);
?>
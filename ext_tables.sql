#
# Table structure for table 'tx_guestbook_comment'
#
CREATE TABLE tx_guestbook_comment (
	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,
	tstamp int(11) DEFAULT '0' NOT NULL,
	crdate int(11) DEFAULT '0' NOT NULL,
	cruser_id int(11) DEFAULT '0' NOT NULL,
	deleted tinyint(4) DEFAULT '0' NOT NULL,
	hidden tinyint(4) DEFAULT '0' NOT NULL,
	author tinytext NOT NULL,
	author_email tinytext NOT NULL,
	author_url tinytext NOT NULL,
	author_ip tinytext NOT NULL,
	content text NOT NULL,
	karma double(11,2) DEFAULT '0.00' NOT NULL,
	agent tinytext NOT NULL,
	type tinytext NOT NULL,
	feuser_id tinytext NOT NULL,
	parent tinytext NOT NULL,
	
	PRIMARY KEY (uid),
	KEY parent (pid)
);
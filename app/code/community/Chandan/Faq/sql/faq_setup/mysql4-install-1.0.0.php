<?php

$installer = $this;

$installer->startSetup();

$installer->run("

-- DROP TABLE IF EXISTS {$this->getTable('faq')};
CREATE TABLE {$this->getTable('faq')} (
  `faq_id` int(11) unsigned NOT NULL auto_increment,
  `question` varchar(255) NOT NULL default '',  
  `answer` text NOT NULL default '',
  `status` smallint(6) NOT NULL default '0',
  `created_time` datetime NULL,
  `update_time` datetime NULL,
  PRIMARY KEY (`faq_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ");

$installer->endSetup(); 
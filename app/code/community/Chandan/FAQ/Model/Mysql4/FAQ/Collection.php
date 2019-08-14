<?php

class Chandan_FAQ_Model_Mysql4_FAQ_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('faq/faq');
    }
}
<?php

class Chandan_FAQ_Model_FAQ extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('faq/faq');
    }
}
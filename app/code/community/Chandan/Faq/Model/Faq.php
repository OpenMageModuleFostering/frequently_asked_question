<?php

class Chandan_Faq_Model_Faq extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('faq/faq');
    }
}
<?php

class Chandan_Faq_Model_Mysql4_Faq extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the faq_id refers to the key field in your database table.
        $this->_init('faq/faq', 'faq_id');
    }
}
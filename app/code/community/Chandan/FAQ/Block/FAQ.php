<?php
class Chandan_FAQ_Block_FAQ extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getFAQ()     
     { 
        if (!$this->hasData('faq')) {
            $this->setData('faq', Mage::registry('faq'));
        }
        return $this->getData('faq');
        
    }
}
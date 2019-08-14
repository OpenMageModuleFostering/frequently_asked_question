<?php
class Chandan_Faq_Block_Faq extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getFaq()     
     { 
        if (!$this->hasData('faq')) {
            $this->setData('faq', Mage::registry('faq'));
        }
        return $this->getData('faq');
        
    }
}
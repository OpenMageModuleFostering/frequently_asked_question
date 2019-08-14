<?php
class Chandan_Faq_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {    
		if(Mage::getStoreConfig('chandan/faq_select/chandan_select') == 0){
			$this->_redirect("/");
		}	
		$this->loadLayout();   
		$this->getLayout()->getBlock('head')->setTitle('FAQ');			
		$this->renderLayout();
    }
}
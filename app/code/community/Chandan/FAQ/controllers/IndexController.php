<?php
class Chandan_FAQ_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	if(Mage::getStoreConfig('chandan_faq/faq_select/chandan_select') == 0){
			$this->_redirect("/");
		}
		$this->loadLayout();    
		$this->getLayout()->getBlock('head')->setTitle('FAQ');		
		$this->renderLayout();
    }
}
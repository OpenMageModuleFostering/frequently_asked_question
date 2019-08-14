<?php
class Chandan_FAQ_Block_Adminhtml_FAQ extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_faq';
    $this->_blockGroup = 'faq';
    $this->_headerText = Mage::helper('faq')->__('FAQ Manager');
    $this->_addButtonLabel = Mage::helper('faq')->__('Add FAQ');
    parent::__construct();
  }
}
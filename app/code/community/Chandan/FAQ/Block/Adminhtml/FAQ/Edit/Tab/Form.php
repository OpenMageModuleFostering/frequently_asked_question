<?php

class Chandan_FAQ_Block_Adminhtml_FAQ_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('faq_form', array('legend'=>Mage::helper('faq')->__('FAQ information')));
     
      $fieldset->addField('question', 'text', array(
          'label'     => Mage::helper('faq')->__('Question'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'question',
      ));

     $fieldset->addField('answer', 'editor', array(
          'name'      => 'answer',
          'label'     => Mage::helper('faq')->__('Answer'),
          'title'     => Mage::helper('faq')->__('Answer'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('faq')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('faq')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('faq')->__('Disabled'),
              ),
          ),
      ));
      
      if ( Mage::getSingleton('adminhtml/session')->getFAQData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getFAQData());
          Mage::getSingleton('adminhtml/session')->setFAQData(null);
      } elseif ( Mage::registry('faq_data') ) {
          $form->setValues(Mage::registry('faq_data')->getData());
      }
      return parent::_prepareForm();
  }
}
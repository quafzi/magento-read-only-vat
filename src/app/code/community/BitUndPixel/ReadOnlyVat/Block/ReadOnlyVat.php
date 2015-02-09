<?php

class BitUndPixel_ReadOnlyVat_Block_ReadOnlyVat extends Mage_Core_Block_Template
{
    protected function _toHtml()
    {
        $addressId = Mage::app()->getRequest()->getParam('id');
        /** @var Mage_Customer_Model_Customer $customer */
        $customer = Mage::helper('customer')->getCustomer();
        $address = $customer->getAddressById($addressId);

        if ($address->hasVatId()) {
            return parent::_toHtml();
        }
    }
}

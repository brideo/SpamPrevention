<?php

include('Mage/Contacts/controllers/IndexController.php');

class Brideo_SpamPrevention_IndexController extends Mage_Contacts_IndexController {

    /**
     * If the value of spam check has been changed throw Exception.
     * If the value of spam check is not checked, assumed field has not been added and continue.
     *
     * @throws Exception
     */
    public function postAction() {

        $spam_check = $this->getRequest()->getPost(Brideo_SpamPrevention_Helper_Data::WEBSITE);
        if(!isset($spam_check) || $spam_check !== Brideo_SpamPrevention_Helper_Data::WEBSITE_VALUE) {
            Mage::getSingleton('customer/session')->addError(Mage::helper('brideo_spamprevention')->__('Unable to submit your request, please do not update the website field.'));
            $this->_redirect('*/*/');
            return;
        }
        parent::postAction();
    }

}

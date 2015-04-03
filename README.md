#Magento Spam Prevention

##Installation

To install this module use modman, otherwise download and install manually.

    modman clone git@github.com:brideo/SpamPrevention.git

Once you have installed the Magento module you will need to add a hidden field to your contacts/form.phtml template, within the form tags add the following code.
 
    <?php echo $this->getChildHtml('spam_prevention'); ?>

I have included an example form.phtml within this repo, please reference that if you get stuck. Unfortunately due to this files layout I couldn't insert this using xml, injecting it with javascript would mean some spam bots wouldn't render the hidden field meaning they would just post to the form normally.

##How it works

This module adds a hidden field to the form with a default value, this is hidden so human users will not be able to see it. This means if the value is changed we know it was most likely a spam bot that changed the value as they fill in all fields within the form.

The name for this field is website, you may of extended your form to include this which could break your from. To change this edit the following file:

    app/code/community/Brideo/SpamPrevention/Helper/Data.php
    
You will see some constants in there which are pretty self explanatory.  

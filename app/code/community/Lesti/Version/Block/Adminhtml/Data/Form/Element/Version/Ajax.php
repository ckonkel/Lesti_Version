<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gordon
 * Date: 20.05.13
 * Time: 13:27
 * To change this template use File | Settings | File Templates.
 */
class Lesti_Version_Block_Adminhtml_Data_Form_Element_Version_Ajax extends Varien_Data_Form_Element_Abstract
{

    public function __construct($attributes=array())
    {
        parent::__construct($attributes);
        //$this->setTemplate('version/'.$attributes['version_type'].'.phtml');
    }

    public function getElementHtml()
    {
        $html = $this->getAfterElementHtml();
        return $html;
    }

}
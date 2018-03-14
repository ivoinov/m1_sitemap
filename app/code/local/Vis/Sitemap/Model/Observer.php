<?php
/**
 * *
 *  * PHP version 5
 *  *
 *  * LICENSE: This source file is subject to version 3.01 of the PHP license
 *  * that is available through the world-wide-web at the following URI:
 *  * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 *  * the PHP License and are unable to obtain it through the web, please
 *  * send a note to license@php.net so we can mail you a copy immediately.
 *  *
 *  * @category   CategoryName
 *  * @package    PackageName
 *  * @author     Ilya Voinov <ilya.voinov@yahoo.com>
 *  * @copyright  1997-2018 The PHP Group
 *  * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 *
 */

/**
 * Class Vis_Sitemap_Model_Observer
 */
class Vis_Sitemap_Model_Observer
{
    /**
     * @param $observer
     */
    public function adminhtmlCmsPageEditTabMainPrepareForm($observer)
    {
        /** @var Varien_Data_Form $form */
        $form = $observer->getForm();
        $baseFieldsetElement = $form->getElement('base_fieldset');
        $baseFieldsetElement->addField(Vis_Sitemap_Helper_Data::IS_INCLUDE_IN_SITEMAP, 'select', array(
            'label'    => Mage::helper('cms')->__('Is include into sitemap'),
            'title'    => Mage::helper('cms')->__('Include in sitemap'),
            'name'     => Vis_Sitemap_Helper_Data::IS_INCLUDE_IN_SITEMAP,
            'required' => false,
            'options'  => Mage::getModel('adminhtml/system_config_source_yesno')->toArray(),
            'disabled' => false,
        ));
    }
}
<?php
/**
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   CategoryName
 * @package    PackageName
 * @author     Ilya Voinov <ilya.voinov@yahoo.com>
 * @copyright  1997-2018 The PHP Group
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 */
/** @var Mage_Eav_Model_Entity_Setup $this */
$installer = $this;
$installer->startSetup();

$this->getConnection()->addColumn($this->getTable('cms/page'), Vis_Sitemap_Helper_Data::IS_INCLUDE_IN_SITEMAP,
    'tinyint(1) unsigned NOT NULL DEFAULT 1');

$this->addAttribute('catalog_category', Vis_Sitemap_Helper_Data::IS_INCLUDE_IN_SITEMAP, array(
    'type'     => 'int',
    'label'    => 'Is include in sitemap',
    'input'    => 'select',
    'source'   => 'eav/entity_attribute_source_boolean',
    'global'   => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'required' => false,
    'default'  => 1
));
$installer->endSetup();
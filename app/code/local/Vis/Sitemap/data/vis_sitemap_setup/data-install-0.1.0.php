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

$installer = $this;
/** @var $this Mage_Catalog_Model_Resource_Setup */
$attributeId = $installer->getAttributeId('catalog_category', Vis_Sitemap_Helper_Data::IS_INCLUDE_IN_SITEMAP);

$select = $this->getConnection()->select()->from(array('cce' => $this->getTable('catalog/category')), array());
$select->columns(array(
    'value_id'       => new Zend_Db_Expr('NULL'),
    'entity_type_id' => new Zend_Db_Expr(3),
    'attribute_id'   => new Zend_Db_Expr($attributeId),
    'store_id'       => new Zend_Db_Expr(0),
    'entity_id'      => new Zend_Db_Expr('cce.entity_id'),
    'value'          => new Zend_Db_Expr(1),
));
$this->getConnection()->insertFromSelect($select, $this->getConnection()->getTableName('catalog_category_entity_int'));
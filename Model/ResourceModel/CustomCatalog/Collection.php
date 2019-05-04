<?php
/**
 * @category   Bluethink
 * @package    Bluethink_CustomCatalog
 * @author     santosh.bluethink@gmail.com
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Bluethink\CustomCatalog\Model\ResourceModel\CustomCatalog;
 
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'customcatalog_id';
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Bluethink\CustomCatalog\Model\CustomCatalog',
            'Bluethink\CustomCatalog\Model\ResourceModel\CustomCatalog'
        );
    }
}
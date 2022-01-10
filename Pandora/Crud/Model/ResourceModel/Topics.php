<?php
namespace Pandora\Crud\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Topics extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('t_pandora', 'entity_id');
    }
}

<?php
namespace Pandora\Crud\Model;

use Magento\Framework\Model\AbstractModel;

class Topics extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(Topics::class);
    }
}

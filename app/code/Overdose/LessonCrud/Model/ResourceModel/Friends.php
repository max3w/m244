<?php

namespace Overdose\LessonCrud\Model\ResourceModel;

class Friends extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('overdose_crud', 'id');
    }
}

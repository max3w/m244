<?php

namespace Overdose\LessonCrud\Model\ResourceModel\Collection;

class Friends extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('\Overdose\LessonCrud\Model\Friends',
        '\Overdose\LessonCrud\Model\ResourceModel\Friends');
    }
}

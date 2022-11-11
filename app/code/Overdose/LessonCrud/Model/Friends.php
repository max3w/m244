<?php

namespace Overdose\LessonCrud\Model;

class Friends extends \Magento\Framework\Model\AbstractModel
 {
    protected function _construct()
    {
        $this->_init(\Overdose\LessonCrud\Model\ResourceModel\Friends::class);
    }
}

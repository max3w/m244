<?php

namespace Overdose\Employee\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

Class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}



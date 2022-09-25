<?php

namespace Overdose\LessonCrud\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements HttpGetActionInterface
{
    protected PageFactory $result;

    public function __construct(PageFactory $result)
    {
        $this->result = $result;
    }

    public function execute()
    {
        return $this->result->create();
    }
}

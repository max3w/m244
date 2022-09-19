<?php

namespace Overdose\Employee\ViewModel;

class One implements \Magento\Framework\View\Element\Block\ArgumentInterface
{

    public function iAmViewModel(): string
    {
        return ('I am a view model');
    }

}

<?php

namespace Overdose\LessonCrud\ViewModel;

class Two implements \Magento\Framework\View\Element\Block\ArgumentInterface
{

    public function iAmViewModel(): string
    {
        return ('I am Two view model');
    }

}

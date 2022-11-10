<?php

namespace Overdose\LessonCrud\ViewModel;

class Two implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    protected $friendsFactory;
    protected $friendsResourceModel;
    protected $friendsCollectionFactory;

    public function __construct(
        \Overdose\LessonCrud\Model\FriendsFactory $friendsFactory,
        \Overdose\LessonCrud\Model\ResourceModel\Friends $friendsResourceModel,
        \Overdose\LessonCrud\Model\ResourceModel\Collection\FriendsFactory $friendsCollectionFactory
    ) {
        $this->friendsFactory = $friendsFactory;
        $this->friendsResourceModel = $friendsResourceModel;
        $this->friendsCollectionFactory = $friendsCollectionFactory;
    }

    public function iAmViewModel(): string
    {
        return ('I am Two view model');
    }

    public function saveNewFriend($name, $age, $comment){
       // 'Semen', '17', 'A cool guy'
     $model = $this->friendsFactory->create();

     $model->setData('name', $name)
        ->setData('age', $age)
        ->setData('comment', $comment);
     //Save
        $this->friendsResourceModel->save($model);
}
}

<?php

namespace Overdose\LessonCrud\ViewModel;

use Magento\Framework\Exception\AlreadyExistsException;

class Two implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    protected $friendsFactory;
    protected $friendsResourceModel;
    protected $friendsCollectionFactory;
    protected $_productCollectionFactory;

    public function __construct(
        \Overdose\LessonCrud\Model\FriendsFactory $friendsFactory,
        \Overdose\LessonCrud\Model\ResourceModel\Friends $friendsResourceModel,
        \Overdose\LessonCrud\Model\ResourceModel\Collection\FriendsFactory $friendsCollectionFactory,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        array $data = []
    ) {
        $this->friendsFactory = $friendsFactory;
        $this->friendsResourceModel = $friendsResourceModel;
        $this->friendsCollectionFactory = $friendsCollectionFactory;
        $this->_productCollectionFactory = $productCollectionFactory;
    }

    public function iAmViewModel(): string
    {
        return ('I am Two view model crud');
    }

    /**
     * @throws AlreadyExistsException
     */
    public function saveNewFriend($name, $age, $comment){

           // 'Semen', '17', 'A cool guy'
            $model = $this->friendsFactory->create();
            $model->setData('name', $name)
                ->setData('age', $age)
                ->setData('comment', $comment);
            //Save
            $this->friendsResourceModel->save($model);
    }

    public function getProductCollection()
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        $collection->setPageSize(3); // fetching only 3 products
        return $collection;
    }

    public function gelAllFriends()
    {
        $post = $this->friendsCollectionFactory->create();
        //$post->addFieldToFilter('id', ['eq'=>66]); Filter by id
        $collection = $post->getItems();
        foreach($collection as $item){
            //echo "<pre>";
            print_r($item->getData()['id']);
            echo ",";
        }
        //return $collection;
    }
}

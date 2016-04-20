<?php namespace Buildateam\Testimonials\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'testimonials_id';

    protected function _construct()
    {
        $this->_init('Buildateam\Testimonials\Model\Post', 'Buildateam\Testimonials\Model\ResourceModel\Post');
    }

}
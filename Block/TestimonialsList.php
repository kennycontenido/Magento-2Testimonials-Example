<?php
namespace Buildateam\Testimonials\Block;

use Buildateam\Testimonials\Api\Data\PostInterface;
use Buildateam\Testimonials\Model\ResourceModel\Post\Collection as PostCollection;

class TestimonialsList extends \Magento\Framework\View\Element\Template implements
    \Magento\Framework\DataObject\IdentityInterface
{
    /**
     * @var \Buildateam\Testimonials\Model\ResourceModel\Post\CollectionFactory
     */
    protected $_testimonialsCollectionFactory;

    /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Buildateam\Testimonials\Model\ResourceModel\Post\CollectionFactory $testimonialsCollectionFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Buildateam\Testimonials\Model\ResourceModel\Post\CollectionFactory $testimonialsCollectionFactory,
            array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_testimonialsCollectionFactory = $testimonialsCollectionFactory;
      
    }

    /**
     * @return \Buildateam\Testimonials\Model\ResourceModel\Post\Collection
     */
    public function getPosts()
    {
       if (!$this->hasData('posts')) {
            $posts = $this->_testimonialsCollectionFactory
                ->create()
                ->addOrder(
                    PostInterface::CREATION_TIME,
                    PostCollection::SORT_ORDER_DESC
                );
            $this->setData('posts', $posts);
        }
        return $this->getData('posts');
    }

    /**
     * Return identifiers for produced content
     *
     * @return array
     */
    public function getIdentities()
    {
        return [\Buildateam\Testimonials\Model\Post::CACHE_TAG . '_' . 'list'];
    }

    
    
}
<?php
namespace Buildateam\Testimonials\Controller\Index;

use \Magento\Framework\App\Action\Action;

class Index extends Action
{
    /** @var  \Magento\Framework\View\Result\Page */
    protected $resultPageFactory;
    /**
     * @param \Magento\Framework\App\Action\Context $context
     */
    public function __construct(\Magento\Framework\App\Action\Context $context,
                                \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * Testimonials Index, shows a list of Testimonials posts.
     *
     * @return \Magento\Framework\View\Result\PageFactory
     */
     
    public function execute()
    {
          return $this->resultPageFactory->create();
          
    }
}
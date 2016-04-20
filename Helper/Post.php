<?php namespace Buildateam\Testimonials\Helper;

use Magento\Framework\App\Action\Action;

class Post extends \Magento\Framework\App\Helper\AbstractHelper
{

    /**
     * @var \ Buildateam\Testimonials\Model\Post
     */
    protected $_post;

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    /**
     * Constructor
     *
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Buildateam\Testimonials\Model\Post $post
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
    */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
            //,
   //     \Buildateam\Testimonials\Model\Post $post,
    //    \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
      //  $this->_post = $post;
      //  $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
    public function isUserAllowed(){
        
        return true;
       // return $customerSession->isLoggedIn();
         // $objectManager = $this->_objectmanager->create('\Magento\Framework\App\ObjectManager');
       // $customerSession = $objectManager->get('Magento\Customer\Model\Session');
     
        
        
        
    }
     
    
     protected function getCustomerData()
    {
                $data = [
                            'id'=> $this->_customerSession->getId(),
                            'customer_name'=> $this->_customerSession->getName()
                        ];
                return $data;
                
    }

    /**
     * Return a Testimonials post from given post id.
     *
     * @param Action $action
     * @param null $postId
     * @return \Magento\Framework\View\Result\Page|bool
     */
//    public function prepareResultPost(Action $action, $postId = null)
//    {
//        if ($postId !== null && $postId !== $this->_post->getId()) {
//            $delimiterPosition = strrpos($postId, '|');
//            if ($delimiterPosition) {
//                $postId = substr($postId, 0, $delimiterPosition);
//            }
//
//            if (!$this->_post->load($postId)) {
//                return false;
//            }
//        }
//
//        if (!$this->_post->getId()) {
//            return false;
//        }
//
//        $resultPage = $this->resultPageFactory->create();
//     
//        $resultPage->addHandle('testimonials_post_view');
//
//        $resultPage->addPageLayoutHandles(['id' => $this->_post->getId()]);
//
//        $this->_eventManager->dispatch(
//            'buildateam_testimonials_post_render',
//            ['post' => $this->_post, 'controller_action' => $action]
//        );
//
//        return $resultPage;
//    }
}
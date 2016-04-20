<?php
namespace Buildateam\Testimonials\Block;


use Magento\Framework\View\Element\Template;
use Magento\Customer\Model\Session;
//use Magento\Framework\Stdlib\DateTime;
/**
 * Main contact form block
 */
class TestimonialsForm extends Template
{
    /**
     * @param Template\Context $context
     * @param array $data
     */
    
     protected $_helper;
     protected $_customersession;
   
     public function __construct(Template\Context $context,
             \Buildateam\Testimonials\Helper\Post $helper,
            Session $customerSession,
               array $data = [])
    {
        parent::__construct($context, $data);
        $this->_isScopePrivate = true;
        $this->_helper = $helper;
        $this->_customerSession = $customerSession;
    }

    
    
    /**
     * Returns action url for contact form
     *
     * @return string
     */
    public function getFormAction()
    {
        return $this->getUrl('testimonials/index/post', ['_secure' => true]);
    }
    
    public function isUserAllowed()
    {
        return  $this->_customerSession->isLoggedIn();
        
    }
    
    
}


<?php

namespace Buildateam\Testimonials\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Customer\Model\Session;

class Post extends Action {

    protected $_customerSession;

    public function __construct(\Magento\Framework\App\Action\Context $context, Session $customerSession, array $data = []) {
        parent::__construct($context, $data);
        $this->_customerSession = $customerSession;
    }

    protected function getCustomerData() {
        $data = [
            'customer_id' => $this->_customerSession->getId(),
            'customer_name' => $this->_customerSession->getCustomer()->getName()
        ];
        return $data;
    }

    public function execute() {
        $post = $this->getRequest()->getPostValue();
        $postT = array_merge($post, $this->getCustomerData());

        if (!$post) {
            $this->messageManager->addError(
                    __('We can\'t process your request right now. Sorry, that\'s all we know.')
            );
            $this->_redirect('*/*/');
            return;
        }

        $model = $this->_objectManager->create('Buildateam\Testimonials\Model\Post');

        $model->setData($postT);

        try {
            $model->save();

            $this->messageManager->addSuccess(
                    __('Testimonial saved')
            );
            $this->_redirect('testimonials');
            return;
        } catch (\Exception $e) {
            $this->messageManager->addError(
                    __('We can\'t process your request right now. Sorry, that\'s all we know.')
            );
            $this->_redirect('testimonials');
            return;
        }
    }

}

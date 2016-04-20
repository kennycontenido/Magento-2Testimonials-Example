<?php
namespace Buildateam\Testimonials\Block\Adminhtml;

class Post extends \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_controller = 'adminhtml_post';
        $this->_blockGroup = 'Buildateam_Testimonials';
        $this->_headerText = __('Manage Testimonials Posts');

        parent::_construct();
    }

    protected function _isAllowedAction($resourceId)
    {
        return $this->_authorization->isAllowed($resourceId);
    }
}

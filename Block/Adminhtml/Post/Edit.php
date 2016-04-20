<?php
namespace Buildateam\Testimonials\Block\Adminhtml\Post;

class Edit extends \Magento\Backend\Block\Widget\Form\Container
{
    
    /**
     * Core registry
     *
     * @var \Magento\Framework\Registry
     */
    protected $_coreRegistry = null;

    /**
     * @param \Magento\Backend\Block\Widget\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Widget\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        $this->_coreRegistry = $registry;
        parent::__construct($context, $data);
    }

    /**
     * Initialize testimonials post edit block
     *
     * @return void
     */
    protected function _construct()
    {
        
        
        $this->_objectId = 'testimonials_id';
        $this->_blockGroup = 'Buildateam_Testimonials';
        $this->_controller = 'adminhtml_post';

        parent::_construct();
        if ($this->_isAllowedAction('Buildateam_Testimonials::save')) {
            $this->buttonList->update('save', 'label', __('Save Testimonials Post'));
            $this->buttonList->add(
                'saveandcontinue',
                [
                    'label' => __('Save and Continue Edit'),
                    'class' => 'save',
                    'data_attribute' => [
                        'mage-init' => [
                            'button' => ['event' => 'saveAndContinueEdit', 'target' => '#edit_form'],
                        ],
                    ]
                ],
                -100
            );
        } else {
            $this->buttonList->remove('save');
        }

        if ($this->_isAllowedAction('Buildateam_Testimonials::post_delete')) {
            $this->buttonList->update('delete', 'label', __('Delete Testimonials Post'));
        } else {
            $this->buttonList->remove('delete');
        }
    }

    /**
     * Retrieve text for header element depending on loaded post
     *
     * @return \Magento\Framework\Phrase
     */
    public function getHeaderText()
    {
            return __("Edit Post '%1'", $this->escapeHtml($this->_coreRegistry->registry('testimonials_post')->getId()));
       
    }

    /**
     * Check permission for passed action
     *
     * @param string $resourceId
     * @return bool
     */
    protected function _isAllowedAction($resourceId)
    {
        return $this->_authorization->isAllowed($resourceId);
    }

   
    protected function _getSaveAndContinueUrl()
    {
              return $this->getUrl('testimonials/*/save', ['_current' => true, 'back' => 'edit', 'active_tab' => '']);
    }
}
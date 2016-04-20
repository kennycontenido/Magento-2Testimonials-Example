<?php
namespace Buildateam\Testimonials\Helper;

//use Magento\Framework\App\Config\ScopeConfigInterface;


class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $_scopeConfig;

    /**
     * @var \Magento\Framework\HTTP\Header
     */
    protected $_httpHeader;

    /**
     * @var \Magento\Framework\App\Cache\Frontend\Pool
     */
    protected $_cacheFrontendPool;

    /**
     * @var string
     */
    protected $_controllerMsg = '';


    /**
     *
     * @var array
     */
    protected $_defaultLogFiles = array('exception'=>'exception.log', 'system'=>'system.log', 'debug'=>'debug.log');

    /**
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */
    public function __construct(
            \Magento\Framework\App\Helper\Context $context,
            \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
            \Magento\Framework\HTTP\Header $httpHeader,
            \Magento\Framework\App\Cache\Frontend\Pool $cacheFrontendPool
    ) {
        $this->_scopeConfig = $scopeConfig;

        $this->_httpHeader = $httpHeader;

        $this->_cacheFrontendPool = $cacheFrontendPool;

        parent::__construct($context);
    }


    public function setControllerMessage($msg)
    {
        $this->_controllerMsg = $msg;
    }

    public function getControllerMessage()
    {
        return $this->_controllerMsg;
    }

}
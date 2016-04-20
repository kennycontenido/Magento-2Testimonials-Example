<?php namespace Buildateam\Testimonials\Model;

use Buildateam\Testimonials\Api\Data\PostInterface;
use Magento\Framework\DataObject\IdentityInterface;

class Post  extends \Magento\Framework\Model\AbstractModel implements PostInterface, IdentityInterface
{

    
    /**
     * CMS page cache tag
     */
    const CACHE_TAG = 'testimonials_post';

    /**
     * @var string
     */
    protected $_cacheTag = 'testimonials_post';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'testimonials_post';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Buildateam\Testimonials\Model\ResourceModel\Post');
    }

    

    /**
     * Return unique ID(s) for each object in system
     *
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(self::TESTIMONIALS_ID);
    }
    
    /**
     * Get CUSTOMER ID
     *
     * @return int|null
     */
    public function getCustomerId()
    {
        return $this->getData(self::CUSTOMER_ID);
    }

    /**
     * Get customer name
     *
     * @return string|null
     */
    public function getCustomerName()
    {
        return $this->getData(self::CUSTOMER_NAME);
    }
    /**
     * Get content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->getData(self::TESTIMONIALS);
    }

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime()
    {
        return $this->getData(self::CREATION_TIME);
    }

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->getData(self::UPDATE_TIME);
    }
    /**
     * Set ID
     *
     * @param int $id
     * @return \Buildateam\Testimonials\Api\Data\PostInterface
     */
    public function setId($id)
    {
        return $this->setData(self::TESTIMONIALS_ID, $id);
    }

    /**
     * Set customerId
     *
     * @param int $customerId
     * @return \Buildateam\Testimonials\Api\Data\PostInterface
     */
    
    public function setCustomerId($customerId)
    {
        return $this->setData(self::CUSTOMER_ID, $customerId);
    }
    /**
     * Set customerName
     *
     * @param string $customerName
     * @return \Buildateam\Testimonials\Api\Data\PostInterface
     */
    public function setCustomerName($customerName)
    {
        return $this->setData(self::CUSTOMER_NAME, $customerName);
    }
    
    /**
     * Set content
     *
     * @param string $content
     * @return \Buildateam\Testimonials\Api\Data\PostInterface
     */
    
    
    public function setContent($testimonials)
    {
        return $this->setData(self::TESTIMONIALS, $testimonials);
    }
    
    /**
     * Set creation time
     *
     * @param string $creation_time
     * @return \Buildateam\Testimonials\Api\Data\PostInterface
     */
    public function setCreationTime($creation_time)
    {
        return $this->setData(self::CREATION_TIME, $creation_time);
    }

    /**
     * Set update time
     *
     * @param string $update_time
     * @return \Buildateam\Testimonials\Api\Data\PostInterface
     */
    public function setUpdateTime($update_time)
    {
        return $this->setData(self::UPDATE_TIME, $update_time);
    }

}
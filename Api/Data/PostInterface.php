<?php
namespace Buildateam\Testimonials\Api\Data;


interface PostInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const TESTIMONIALS_ID = 'testimonials_id';
    const CUSTOMER_ID   = 'customer_id';
    const CUSTOMER_NAME   = 'customer_name';
    const TESTIMONIALS  = 'testimonials';
    const CREATION_TIME = 'creation_time';
    const UPDATE_TIME   = 'update_time';
    
    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();
    
     /**
     * Get CustomerId
     *
     * @return int|null
     */
    public function getCustomerId();

    /**
     * Get Customer Name
     *
     * @return string
     */
    public function getCustomerName();
    
    /**
     * Get Testimonials Content
     *
     * @return string
     */
    public function getContent();

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime();

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime();

    /**
     * Set ID
     *
     * @param int $id
     * @return \Buildateam\Testimonials\Api\Data\PostInterface
     */
    public function setId($id);

    
    /**
     * Set customerID
     *
     * @param int $customerId
     * @return \Buildateam\Testimonials\Api\Data\PostInterface
     */
    public function setCustomerId($customerId);

   /**
     * Set customer name
     *
     * @param string $customerName
     * @return \Buildateam\Testimonials\Api\Data\PostInterface
     */
    public function setCustomerName($customerName);
    /**
     * Set content
     *
     * @param string $content
     * @return \Buildateam\Testimonials\Api\Data\PostInterface
     */
    public function setContent($content);

    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return \Buildateam\Testimonials\Api\Data\PostInterface
     */
    public function setCreationTime($creationTime);

    /**
     * Set update time
     *
     * @param string $updateTime
     * @return \Buildateam\Testimonials\Api\Data\PostInterface
     */
    public function setUpdateTime($updateTime);

   
}
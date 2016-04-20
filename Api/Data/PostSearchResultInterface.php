<?php
namespace Buildateam\Testimonials\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface PostSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get pages list.
     *
     * @return \Buildateam\Testimonials\Api\Data\PostInterface[]
     */
    public function getItems();

    /**
     * Set pages list.
     *
     * @param \Buildateam\Testimonials\Api\Data\PostInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

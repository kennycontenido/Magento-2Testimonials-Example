<?php  
namespace Buildateam\Testimonials\Block;  
 
class Link extends \Magento\Framework\View\Element\Html\Link  
 {  
  protected $_template = 'Buildateam_Testimonials::link.phtml';   
 
  public function getHref()  
   {  
     return $this->getUrl('testimonials');  
   }  
  
  public function getLabel()  
   {  
     return __('Testimonials');  
   }  
 }
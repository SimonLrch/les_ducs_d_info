<?php
namespace EJ\RTE;
class ImageBrowser {
    
  public function ajaxAction ($value) {
    $this -> ajaxAction = $value;
    return $this;
  }
  
  public function extensionAllow ($value) {
    $this -> extensionAllow = $value;
    return $this;
  }
  
  public function filePath ($value) {
    $this -> filePath = $value;
    return $this;
  }
  
}
  ?>
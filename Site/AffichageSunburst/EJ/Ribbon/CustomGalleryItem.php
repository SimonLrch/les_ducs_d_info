<?php
namespace EJ\Ribbon;
class CustomGalleryItem {
    
  public function buttonSettings ($value) {
    $this -> buttonSettings = $value;
    return $this;
  }
  
  public function customItemType ($value) {
    $this -> customItemType = $value;
    return $this;
  }
  
  public function customToolTip ($value) {
    $this -> customToolTip = $value;
    return $this;
  }
  
  public function menuId ($value) {
    $this -> menuId = $value;
    return $this;
  }
  
  public function menuSettings ($value) {
    $this -> menuSettings = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function toolTip ($value) {
    $this -> toolTip = $value;
    return $this;
  }
  
}
  ?>
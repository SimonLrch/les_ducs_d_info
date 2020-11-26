<?php
namespace EJ\Ribbon;
class GalleryItem {
    
  public function buttonSettings ($value) {
    $this -> buttonSettings = $value;
    return $this;
  }
  
  public function customToolTip ($value) {
    $this -> customToolTip = $value;
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
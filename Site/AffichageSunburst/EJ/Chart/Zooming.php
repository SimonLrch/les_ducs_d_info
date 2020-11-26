<?php
namespace EJ\Chart;
class Zooming {
    
  public function enable ($value) {
    $this -> enable = $value;
    return $this;
  }
  
  public function enablePinching ($value) {
    $this -> enablePinching = $value;
    return $this;
  }
  
  public function enableDeferredZoom ($value) {
    $this -> enableDeferredZoom = $value;
    return $this;
  }
  
  public function enableMouseWheel ($value) {
    $this -> enableMouseWheel = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function enableScrollbar ($value) {
    $this -> enableScrollbar = $value;
    return $this;
  }
  
  public function toolbarItems ($value) {
    $this -> toolbarItems = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\Diagram;
class ScrollSetting {
    
  public function currentZoom ($value) {
    $this -> currentZoom = $value;
    return $this;
  }
  
  public function horizontalOffset ($value) {
    $this -> horizontalOffset = $value;
    return $this;
  }
  
  public function padding ($value) {
    $this -> padding = $value;
    return $this;
  }
  
  public function verticalOffset ($value) {
    $this -> verticalOffset = $value;
    return $this;
  }
  
  public function viewPortHeight ($value) {
    $this -> viewPortHeight = $value;
    return $this;
  }
  
  public function viewPortWidth ($value) {
    $this -> viewPortWidth = $value;
    return $this;
  }
  
}
  ?>
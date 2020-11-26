<?php
namespace EJ\Map;
class ZoomSetting {
    
  public function animationDuration ($value) {
    $this -> animationDuration = $value;
    return $this;
  }
  
  public function enableZoom ($value) {
    $this -> enableZoom = $value;
    return $this;
  }
  
  public function enableZoomOnSelection ($value) {
    $this -> enableZoomOnSelection = $value;
    return $this;
  }
  
  public function enableMouseWheelZoom ($value) {
    $this -> enableMouseWheelZoom = $value;
    return $this;
  }
  
  public function factor ($value) {
    $this -> factor = $value;
    return $this;
  }
  
  public function level ($value) {
    $this -> level = $value;
    return $this;
  }
  
  public function minValue ($value) {
    $this -> minValue = $value;
    return $this;
  }
  
  public function maxValue ($value) {
    $this -> maxValue = $value;
    return $this;
  }
  
}
  ?>
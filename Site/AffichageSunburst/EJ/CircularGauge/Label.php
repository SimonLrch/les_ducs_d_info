<?php
namespace EJ\CircularGauge;
class Label {
    
  public function angle ($value) {
    $this -> angle = $value;
    return $this;
  }
  
  public function autoAngle ($value) {
    $this -> autoAngle = $value;
    return $this;
  }
  
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function distanceFromScale ($value) {
    $this -> distanceFromScale = $value;
    return $this;
  }
  
  public function includeFirstValue ($value) {
    $this -> includeFirstValue = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
  public function placement ($value) {
    $this -> placement = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function unitText ($value) {
    $this -> unitText = $value;
    return $this;
  }
  
  public function unitTextPosition ($value) {
    $this -> unitTextPosition = $value;
    return $this;
  }
  
  public function font ($value) {
    $this -> font = $value;
    return $this;
  }
  
}
  ?>
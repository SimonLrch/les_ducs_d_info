<?php
namespace EJ\CircularGauge;
class PointerValueText {
    
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
  
  public function distance ($value) {
    $this -> distance = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
  public function showValue ($value) {
    $this -> showValue = $value;
    return $this;
  }
  
  public function font ($value) {
    $this -> font = $value;
    return $this;
  }
  
}
  ?>
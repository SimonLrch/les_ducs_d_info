<?php
namespace EJ\CircularGauge;
class CustomLabel {
    
  public function value ($value) {
    $this -> value = $value;
    return $this;
  }
  
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function textAngle ($value) {
    $this -> textAngle = $value;
    return $this;
  }
  
  public function positionType ($value) {
    $this -> positionType = $value;
    return $this;
  }
  
  public function position ($value) {
    $this -> position = $value;
    return $this;
  }
  
  public function font ($value) {
    $this -> font = $value;
    return $this;
  }
  
}
  ?>
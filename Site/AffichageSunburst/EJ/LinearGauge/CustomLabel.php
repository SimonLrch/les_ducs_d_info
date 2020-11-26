<?php
namespace EJ\LinearGauge;
class CustomLabel {
    
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
  public function positionType ($value) {
    $this -> positionType = $value;
    return $this;
  }
  
  public function textAngle ($value) {
    $this -> textAngle = $value;
    return $this;
  }
  
  public function value ($value) {
    $this -> value = $value;
    return $this;
  }
  
  public function font ($value) {
    $this -> font = $value;
    return $this;
  }
  
  public function position ($value) {
    $this -> position = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\DigitalGauge;
class SegmentSetting {
    
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function gradient ($value) {
    $this -> gradient = $value;
    return $this;
  }
  
  public function length ($value) {
    $this -> length = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
  public function spacing ($value) {
    $this -> spacing = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
}
  ?>
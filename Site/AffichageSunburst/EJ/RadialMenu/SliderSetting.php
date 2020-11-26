<?php
namespace EJ\RadialMenu;
class SliderSetting {
    
  public function ticks ($value) {
    $this -> ticks = $value;
    return $this;
  }
  
  public function strokeWidth ($value) {
    $this -> strokeWidth = $value;
    return $this;
  }
  
  public function labelSpace ($value) {
    $this -> labelSpace = $value;
    return $this;
  }
  
}
  ?>
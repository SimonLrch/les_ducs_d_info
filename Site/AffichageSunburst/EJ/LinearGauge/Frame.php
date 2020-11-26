<?php
namespace EJ\LinearGauge;
class Frame {
    
  public function backgroundImageUrl ($value) {
    $this -> backgroundImageUrl = $value;
    return $this;
  }
  
  public function innerWidth ($value) {
    $this -> innerWidth = $value;
    return $this;
  }
  
  public function outerWidth ($value) {
    $this -> outerWidth = $value;
    return $this;
  }
  
}
  ?>
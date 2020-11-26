<?php
namespace EJ\Chart;
class BubbleOption {
    
  public function radiusMode ($value) {
    $this -> radiusMode = $value;
    return $this;
  }
  
  public function minRadius ($value) {
    $this -> minRadius = $value;
    return $this;
  }
  
  public function maxRadius ($value) {
    $this -> maxRadius = $value;
    return $this;
  }
  
}
  ?>
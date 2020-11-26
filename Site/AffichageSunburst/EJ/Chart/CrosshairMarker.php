<?php
namespace EJ\Chart;
class CrosshairMarker {
    
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
  public function border ($value) {
    $this -> border = $value;
    return $this;
  }
  
  public function size ($value) {
    $this -> size = $value;
    return $this;
  }
  
}
  ?>
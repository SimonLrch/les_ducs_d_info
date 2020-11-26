<?php
namespace EJ\Chart;
class ScrollbarSetting {
    
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
  public function canResize ($value) {
    $this -> canResize = $value;
    return $this;
  }
  
  public function pointsLength ($value) {
    $this -> pointsLength = $value;
    return $this;
  }
  
  public function range ($value) {
    $this -> range = $value;
    return $this;
  }
  
}
  ?>
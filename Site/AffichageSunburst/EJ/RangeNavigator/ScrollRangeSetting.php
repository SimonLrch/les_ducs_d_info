<?php
namespace EJ\RangeNavigator;
class ScrollRangeSetting {
    
  public function end ($value) {
    $this -> end = $value;
    return $this;
  }
  
  public function start ($value) {
    $this -> start = $value;
    return $this;
  }
  
}
  ?>
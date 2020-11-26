<?php
namespace EJ\RangeNavigator;
class RangeSetting {
    
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
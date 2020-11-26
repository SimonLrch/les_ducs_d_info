<?php
namespace EJ\Chart;
class ScrollbarSettingsRange {
    
  public function min ($value) {
    $this -> min = $value;
    return $this;
  }
  
  public function max ($value) {
    $this -> max = $value;
    return $this;
  }
  
}
  ?>
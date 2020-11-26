<?php
namespace EJ\Chart;
class Range {
    
  public function min ($value) {
    $this -> min = $value;
    return $this;
  }
  
  public function max ($value) {
    $this -> max = $value;
    return $this;
  }
  
  public function interval ($value) {
    $this -> interval = $value;
    return $this;
  }
  
}
  ?>
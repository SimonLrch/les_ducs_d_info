<?php
namespace EJ\Chart;
class ChartArea {
    
  public function background ($value) {
    $this -> background = $value;
    return $this;
  }
  
  public function border ($value) {
    $this -> border = $value;
    return $this;
  }
  
}
  ?>
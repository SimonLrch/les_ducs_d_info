<?php
namespace EJ\Chart;
class Histogram {
    
  public function fill ($value) {
    $this -> fill = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
  public function border ($value) {
    $this -> border = $value;
    return $this;
  }
  
}
  ?>
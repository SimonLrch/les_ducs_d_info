<?php
namespace EJ\Chart;
class TrendlinesTooltip {
    
  public function rx ($value) {
    $this -> rx = $value;
    return $this;
  }
  
  public function ry ($value) {
    $this -> ry = $value;
    return $this;
  }
  
  public function duration ($value) {
    $this -> duration = $value;
    return $this;
  }
  
  public function enableAnimation ($value) {
    $this -> enableAnimation = $value;
    return $this;
  }
  
  public function fill ($value) {
    $this -> fill = $value;
    return $this;
  }
  
  public function format ($value) {
    $this -> format = $value;
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
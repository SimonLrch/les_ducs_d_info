<?php
namespace EJ\Chart;
class IndicatorsTooltip {
    
  public function duration ($value) {
    $this -> duration = $value;
    return $this;
  }
  
  public function enableAnimation ($value) {
    $this -> enableAnimation = $value;
    return $this;
  }
  
  public function format ($value) {
    $this -> format = $value;
    return $this;
  }
  
  public function fill ($value) {
    $this -> fill = $value;
    return $this;
  }
  
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
  
}
  ?>
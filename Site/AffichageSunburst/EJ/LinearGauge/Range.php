<?php
namespace EJ\LinearGauge;
class Range {
    
  public function backgroundColor ($value) {
    $this -> backgroundColor = $value;
    return $this;
  }
  
  public function distanceFromScale ($value) {
    $this -> distanceFromScale = $value;
    return $this;
  }
  
  public function endValue ($value) {
    $this -> endValue = $value;
    return $this;
  }
  
  public function endWidth ($value) {
    $this -> endWidth = $value;
    return $this;
  }
  
  public function gradients ($value) {
    $this -> gradients = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
  public function placement ($value) {
    $this -> placement = $value;
    return $this;
  }
  
  public function startValue ($value) {
    $this -> startValue = $value;
    return $this;
  }
  
  public function startWidth ($value) {
    $this -> startWidth = $value;
    return $this;
  }
  
  public function border ($value) {
    $this -> border = $value;
    return $this;
  }
  
}
  ?>
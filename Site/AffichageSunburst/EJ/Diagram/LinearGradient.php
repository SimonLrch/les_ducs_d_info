<?php
namespace EJ\Diagram;
class LinearGradient {
    
  public function stops ($value) {
    $this -> stops = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function x1 ($value) {
    $this -> x1 = $value;
    return $this;
  }
  
  public function x2 ($value) {
    $this -> x2 = $value;
    return $this;
  }
  
  public function y1 ($value) {
    $this -> y1 = $value;
    return $this;
  }
  
  public function y2 ($value) {
    $this -> y2 = $value;
    return $this;
  }
  
}
  ?>
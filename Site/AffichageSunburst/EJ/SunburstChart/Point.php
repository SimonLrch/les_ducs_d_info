<?php
namespace EJ\SunburstChart;
class Point {
    
  public function x ($value) {
    $this -> x = $value;
    return $this;
  }
  
  public function y ($value) {
    $this -> y = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function fill ($value) {
    $this -> fill = $value;
    return $this;
  }
  
}
  ?>
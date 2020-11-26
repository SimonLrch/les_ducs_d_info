<?php
namespace EJ\Diagram;
class Layer {
    
  public function name ($value) {
    $this -> name = $value;
    return $this;
  }
  
  public function active ($value) {
    $this -> active = $value;
    return $this;
  }
  
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
  public function print ($value) {
    $this -> print = $value;
    return $this;
  }
  
  public function lock ($value) {
    $this -> lock = $value;
    return $this;
  }
  
  public function objects ($value) {
    $this -> objects = $value;
    return $this;
  }
  
}
  ?>
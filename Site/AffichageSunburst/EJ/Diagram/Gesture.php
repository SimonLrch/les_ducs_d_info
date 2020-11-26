<?php
namespace EJ\Diagram;
class Gesture {
    
  public function key ($value) {
    $this -> key = $value;
    return $this;
  }
  
  public function keyModifiers ($value) {
    $this -> keyModifiers = $value;
    return $this;
  }
  
}
  ?>
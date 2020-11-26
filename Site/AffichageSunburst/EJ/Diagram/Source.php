<?php
namespace EJ\Diagram;
class Source {
    
  public function optional ($value) {
    $this -> optional = $value;
    return $this;
  }
  
  public function lowerBounds ($value) {
    $this -> lowerBounds = $value;
    return $this;
  }
  
  public function upperBounds ($value) {
    $this -> upperBounds = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\Diagram;
class Segment {
    
  public function direction ($value) {
    $this -> direction = $value;
    return $this;
  }
  
  public function length ($value) {
    $this -> length = $value;
    return $this;
  }
  
  public function point ($value) {
    $this -> point = $value;
    return $this;
  }
  
  public function point1 ($value) {
    $this -> point1 = $value;
    return $this;
  }
  
  public function point2 ($value) {
    $this -> point2 = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function vector1 ($value) {
    $this -> vector1 = $value;
    return $this;
  }
  
  public function vector2 ($value) {
    $this -> vector2 = $value;
    return $this;
  }
  
}
  ?>
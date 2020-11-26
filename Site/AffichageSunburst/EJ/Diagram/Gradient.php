<?php
namespace EJ\Diagram;
class Gradient {
    
  public function LinearGradient ($value) {
    $this -> LinearGradient = $value;
    return $this;
  }
  
  public function RadialGradient ($value) {
    $this -> RadialGradient = $value;
    return $this;
  }
  
  public function Stop ($value) {
    $this -> Stop = $value;
    return $this;
  }
  
}
  ?>
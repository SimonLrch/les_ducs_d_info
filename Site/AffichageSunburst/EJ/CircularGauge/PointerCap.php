<?php
namespace EJ\CircularGauge;
class PointerCap {
    
  public function backgroundColor ($value) {
    $this -> backgroundColor = $value;
    return $this;
  }
  
  public function borderColor ($value) {
    $this -> borderColor = $value;
    return $this;
  }
  
  public function borderWidth ($value) {
    $this -> borderWidth = $value;
    return $this;
  }
  
  public function interiorGradient ($value) {
    $this -> interiorGradient = $value;
    return $this;
  }
  
  public function radius ($value) {
    $this -> radius = $value;
    return $this;
  }
  
}
  ?>
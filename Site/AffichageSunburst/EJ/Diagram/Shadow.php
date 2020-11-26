<?php
namespace EJ\Diagram;
class Shadow {
    
  public function angle ($value) {
    $this -> angle = $value;
    return $this;
  }
  
  public function distance ($value) {
    $this -> distance = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
}
  ?>
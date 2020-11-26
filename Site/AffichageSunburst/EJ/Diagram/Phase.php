<?php
namespace EJ\Diagram;
class Phase {
    
  public function label ($value) {
    $this -> label = $value;
    return $this;
  }
  
  public function lineColor ($value) {
    $this -> lineColor = $value;
    return $this;
  }
  
  public function lineDashArray ($value) {
    $this -> lineDashArray = $value;
    return $this;
  }
  
  public function lineWidth ($value) {
    $this -> lineWidth = $value;
    return $this;
  }
  
  public function name ($value) {
    $this -> name = $value;
    return $this;
  }
  
  public function offset ($value) {
    $this -> offset = $value;
    return $this;
  }
  
  public function orientation ($value) {
    $this -> orientation = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
}
  ?>
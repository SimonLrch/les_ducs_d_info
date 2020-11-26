<?php
namespace EJ\Diagram;
class VerticalRuler {
    
  public function interval ($value) {
    $this -> interval = $value;
    return $this;
  }
  
  public function segmentWidth ($value) {
    $this -> segmentWidth = $value;
    return $this;
  }
  
  public function arrangeTick ($value) {
    $this -> arrangeTick = $value;
    return $this;
  }
  
  public function tickAlignment ($value) {
    $this -> tickAlignment = $value;
    return $this;
  }
  
  public function markerColor ($value) {
    $this -> markerColor = $value;
    return $this;
  }
  
  public function length ($value) {
    $this -> length = $value;
    return $this;
  }
  
  public function thickness ($value) {
    $this -> thickness = $value;
    return $this;
  }
  
}
  ?>
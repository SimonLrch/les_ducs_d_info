<?php
namespace EJ\CircularGauge;
class Indicator {
    
  public function height ($value) {
    $this -> height = $value;
    return $this;
  }
  
  public function imageUrl ($value) {
    $this -> imageUrl = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
  public function position ($value) {
    $this -> position = $value;
    return $this;
  }
  
  public function stateRanges ($value) {
    $this -> stateRanges = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\LinearGauge;
class Tick {
    
  public function angle ($value) {
    $this -> angle = $value;
    return $this;
  }
  
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function height ($value) {
    $this -> height = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
  public function placement ($value) {
    $this -> placement = $value;
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
  
  public function distanceFromScale ($value) {
    $this -> distanceFromScale = $value;
    return $this;
  }
  
}
  ?>
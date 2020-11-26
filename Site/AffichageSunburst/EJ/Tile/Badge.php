<?php
namespace EJ\Tile;
class Badge {
    
  public function enabled ($value) {
    $this -> enabled = $value;
    return $this;
  }
  
  public function maxValue ($value) {
    $this -> maxValue = $value;
    return $this;
  }
  
  public function minValue ($value) {
    $this -> minValue = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function value ($value) {
    $this -> value = $value;
    return $this;
  }
  
  public function position ($value) {
    $this -> position = $value;
    return $this;
  }
  
}
  ?>
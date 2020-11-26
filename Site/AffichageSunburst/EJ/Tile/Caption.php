<?php
namespace EJ\Tile;
class Caption {
    
  public function enabled ($value) {
    $this -> enabled = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function alignment ($value) {
    $this -> alignment = $value;
    return $this;
  }
  
  public function position ($value) {
    $this -> position = $value;
    return $this;
  }
  
  public function icon ($value) {
    $this -> icon = $value;
    return $this;
  }
  
}
  ?>
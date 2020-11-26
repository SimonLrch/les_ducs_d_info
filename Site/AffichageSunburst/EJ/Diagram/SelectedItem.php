<?php
namespace EJ\Diagram;
class SelectedItem {
    
  public function children ($value) {
    $this -> children = $value;
    return $this;
  }
  
  public function constraints ($value) {
    $this -> constraints = $value;
    return $this;
  }
  
  public function getConstraints ($value) {
    $this -> getConstraints = $value;
    return $this;
  }
  
  public function height ($value) {
    $this -> height = $value;
    return $this;
  }
  
  public function offsetX ($value) {
    $this -> offsetX = $value;
    return $this;
  }
  
  public function offsetY ($value) {
    $this -> offsetY = $value;
    return $this;
  }
  
  public function rotateAngle ($value) {
    $this -> rotateAngle = $value;
    return $this;
  }
  
  public function tooltip ($value) {
    $this -> tooltip = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
  public function userHandles ($value) {
    $this -> userHandles = $value;
    return $this;
  }
  
}
  ?>
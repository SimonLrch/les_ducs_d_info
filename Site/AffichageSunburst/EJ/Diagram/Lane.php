<?php
namespace EJ\Diagram;
class Lane {
    
  public function cssClass ($value) {
    $this -> cssClass = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
  public function height ($value) {
    $this -> height = $value;
    return $this;
  }
  
  public function zorder ($value) {
    $this -> zorder = $value;
    return $this;
  }
  
  public function addInfo ($value) {
    $this -> addInfo = $value;
    return $this;
  }
  
  public function children ($value) {
    $this -> children = $value;
    return $this;
  }
  
  public function fillColor ($value) {
    $this -> fillColor = $value;
    return $this;
  }
  
  public function header ($value) {
    $this -> header = $value;
    return $this;
  }
  
  public function isLane ($value) {
    $this -> isLane = $value;
    return $this;
  }
  
  public function name ($value) {
    $this -> name = $value;
    return $this;
  }
  
  public function orientation ($value) {
    $this -> orientation = $value;
    return $this;
  }
  
}
  ?>
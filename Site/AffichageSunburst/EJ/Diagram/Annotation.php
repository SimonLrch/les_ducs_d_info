<?php
namespace EJ\Diagram;
class Annotation {
    
  public function angle ($value) {
    $this -> angle = $value;
    return $this;
  }
  
  public function direction ($value) {
    $this -> direction = $value;
    return $this;
  }
  
  public function height ($value) {
    $this -> height = $value;
    return $this;
  }
  
  public function length ($value) {
    $this -> length = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
}
  ?>
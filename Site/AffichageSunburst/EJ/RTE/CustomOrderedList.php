<?php
namespace EJ\RTE;
class CustomOrderedList {
    
  public function name ($value) {
    $this -> name = $value;
    return $this;
  }
  
  public function tooltip ($value) {
    $this -> tooltip = $value;
    return $this;
  }
  
  public function css ($value) {
    $this -> css = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function listStyle ($value) {
    $this -> listStyle = $value;
    return $this;
  }
  
  public function listImage ($value) {
    $this -> listImage = $value;
    return $this;
  }
  
}
  ?>
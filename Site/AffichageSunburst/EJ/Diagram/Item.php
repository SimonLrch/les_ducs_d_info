<?php
namespace EJ\Diagram;
class Item {
    
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function name ($value) {
    $this -> name = $value;
    return $this;
  }
  
  public function imageUrl ($value) {
    $this -> imageUrl = $value;
    return $this;
  }
  
  public function cssClass ($value) {
    $this -> cssClass = $value;
    return $this;
  }
  
  public function subItems ($value) {
    $this -> subItems = $value;
    return $this;
  }
  
}
  ?>
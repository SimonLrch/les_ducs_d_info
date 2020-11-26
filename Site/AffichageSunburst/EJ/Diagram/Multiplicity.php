<?php
namespace EJ\Diagram;
class Multiplicity {
    
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function target ($value) {
    $this -> target = $value;
    return $this;
  }
  
  public function source ($value) {
    $this -> source = $value;
    return $this;
  }
  
}
  ?>
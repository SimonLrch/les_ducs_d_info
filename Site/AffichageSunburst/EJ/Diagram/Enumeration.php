<?php
namespace EJ\Diagram;
class Enumeration {
    
  public function name ($value) {
    $this -> name = $value;
    return $this;
  }
  
  public function members ($value) {
    $this -> members = $value;
    return $this;
  }
  
}
  ?>
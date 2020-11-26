<?php
namespace EJ\Kanban;
class Constraint {
    
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function min ($value) {
    $this -> min = $value;
    return $this;
  }
  
  public function max ($value) {
    $this -> max = $value;
    return $this;
  }
  
}
  ?>
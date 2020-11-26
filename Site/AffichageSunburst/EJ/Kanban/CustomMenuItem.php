<?php
namespace EJ\Kanban;
class CustomMenuItem {
    
  public function target ($value) {
    $this -> target = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function template ($value) {
    $this -> template = $value;
    return $this;
  }
  
}
  ?>
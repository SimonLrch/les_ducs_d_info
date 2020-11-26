<?php
namespace EJ\Kanban;
class Header {
    
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function key ($value) {
    $this -> key = $value;
    return $this;
  }
  
}
  ?>
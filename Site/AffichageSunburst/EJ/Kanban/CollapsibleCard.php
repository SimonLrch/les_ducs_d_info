<?php
namespace EJ\Kanban;
class CollapsibleCard {
    
  public function field ($value) {
    $this -> field = $value;
    return $this;
  }
  
  public function key ($value) {
    $this -> key = $value;
    return $this;
  }
  
}
  ?>
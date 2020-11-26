<?php
namespace EJ\Kanban;
class UnassignedGroup {
    
  public function enable ($value) {
    $this -> enable = $value;
    return $this;
  }
  
  public function keys ($value) {
    $this -> keys = $value;
    return $this;
  }
  
}
  ?>
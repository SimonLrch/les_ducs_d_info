<?php
namespace EJ\Kanban;
class Workflow {
    
  public function key ($value) {
    $this -> key = $value;
    return $this;
  }
  
  public function allowedTransitions ($value) {
    $this -> allowedTransitions = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\Kanban;
class CardSetting {
    
  public function template ($value) {
    $this -> template = $value;
    return $this;
  }
  
  public function colorMapping ($value) {
    $this -> colorMapping = $value;
    return $this;
  }
  
  public function externalDropTarget ($value) {
    $this -> externalDropTarget = $value;
    return $this;
  }
  
}
  ?>
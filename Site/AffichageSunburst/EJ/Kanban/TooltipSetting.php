<?php
namespace EJ\Kanban;
class TooltipSetting {
    
  public function enable ($value) {
    $this -> enable = $value;
    return $this;
  }
  
  public function template ($value) {
    $this -> template = $value;
    return $this;
  }
  
}
  ?>
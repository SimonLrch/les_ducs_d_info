<?php
namespace EJ\Schedule;
class ContextMenuSetting {
    
  public function enable ($value) {
    $this -> enable = $value;
    return $this;
  }
  
  public function menuItems ($value) {
    $this -> menuItems = $value;
    return $this;
  }
  
}
  ?>
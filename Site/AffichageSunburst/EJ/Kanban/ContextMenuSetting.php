<?php
namespace EJ\Kanban;
class ContextMenuSetting {
    
  public function enable ($value) {
    $this -> enable = $value;
    return $this;
  }
  
  public function disableDefaultItems ($value) {
    $this -> disableDefaultItems = $value;
    return $this;
  }
  
  public function menuItems ($value) {
    $this -> menuItems = $value;
    return $this;
  }
  
  public function customMenuItems ($value) {
    $this -> customMenuItems = $value;
    return $this;
  }
  
}
  ?>
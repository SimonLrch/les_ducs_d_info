<?php
namespace EJ\Grid;
class ContextMenuSetting {
    
  public function contextMenuItems ($value) {
    $this -> contextMenuItems = $value;
    return $this;
  }
  
  public function customContextMenuItems ($value) {
    $this -> customContextMenuItems = $value;
    return $this;
  }
  
  public function enableContextMenu ($value) {
    $this -> enableContextMenu = $value;
    return $this;
  }
  
  public function disableDefaultItems ($value) {
    $this -> disableDefaultItems = $value;
    return $this;
  }
  
  public function subContextMenu ($value) {
    $this -> subContextMenu = $value;
    return $this;
  }
  
}
  ?>
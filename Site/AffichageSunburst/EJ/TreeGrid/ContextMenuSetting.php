<?php
namespace EJ\TreeGrid;
class ContextMenuSetting {
    
  public function contextMenuItems ($value) {
    $this -> contextMenuItems = $value;
    return $this;
  }
  
  public function showContextMenu ($value) {
    $this -> showContextMenu = $value;
    return $this;
  }
  
}
  ?>
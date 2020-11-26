<?php
namespace EJ\FileExplorer;
class ContextMenuSetting {
    
  public function items ($value) {
    $this -> items = $value;
    return $this;
  }
  
  public function customMenuFields ($value) {
    $this -> customMenuFields = $value;
    return $this;
  }
  
}
  ?>
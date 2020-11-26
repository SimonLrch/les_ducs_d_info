<?php
namespace EJ\TreeGrid;
class ToolbarSetting {
    
  public function showToolbar ($value) {
    $this -> showToolbar = $value;
    return $this;
  }
  
  public function toolbarItems ($value) {
    $this -> toolbarItems = $value;
    return $this;
  }
  
  public function customToolbarItems ($value) {
    $this -> customToolbarItems = $value;
    return $this;
  }
  
}
  ?>
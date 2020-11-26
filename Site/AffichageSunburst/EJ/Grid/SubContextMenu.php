<?php
namespace EJ\Grid;
class SubContextMenu {
    
  public function contextMenuItem ($value) {
    $this -> contextMenuItem = $value;
    return $this;
  }
  
  public function subMenu ($value) {
    $this -> subMenu = $value;
    return $this;
  }
  
  public function template ($value) {
    $this -> template = $value;
    return $this;
  }
  
}
  ?>
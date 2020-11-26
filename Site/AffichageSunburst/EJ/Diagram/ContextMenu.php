<?php
namespace EJ\Diagram;
class ContextMenu {
    
  public function showCustomMenuItemsOnly ($value) {
    $this -> showCustomMenuItemsOnly = $value;
    return $this;
  }
  
  public function items ($value) {
    $this -> items = $value;
    return $this;
  }
  
}
  ?>
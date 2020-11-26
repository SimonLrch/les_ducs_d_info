<?php
namespace EJ\Grid;
class SelectionSetting {
    
  public function cellSelectionMode ($value) {
    $this -> cellSelectionMode = $value;
    return $this;
  }
  
  public function enableToggle ($value) {
    $this -> enableToggle = $value;
    return $this;
  }
  
  public function allowDragSelection ($value) {
    $this -> allowDragSelection = $value;
    return $this;
  }
  
  public function selectionMode ($value) {
    $this -> selectionMode = $value;
    return $this;
  }
  
}
  ?>
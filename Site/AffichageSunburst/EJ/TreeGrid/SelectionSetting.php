<?php
namespace EJ\TreeGrid;
class SelectionSetting {
    
  public function enableHierarchySelection ($value) {
    $this -> enableHierarchySelection = $value;
    return $this;
  }
  
  public function enableSelectAll ($value) {
    $this -> enableSelectAll = $value;
    return $this;
  }
  
  public function selectionMode ($value) {
    $this -> selectionMode = $value;
    return $this;
  }
  
  public function selectionType ($value) {
    $this -> selectionType = $value;
    return $this;
  }
  
}
  ?>
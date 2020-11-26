<?php
namespace EJ\Spreadsheet;
class SelectionSetting {
    
  public function activeCell ($value) {
    $this -> activeCell = $value;
    return $this;
  }
  
  public function animationTime ($value) {
    $this -> animationTime = $value;
    return $this;
  }
  
  public function enableAnimation ($value) {
    $this -> enableAnimation = $value;
    return $this;
  }
  
  public function selectionType ($value) {
    $this -> selectionType = $value;
    return $this;
  }
  
  public function selectionUnit ($value) {
    $this -> selectionUnit = $value;
    return $this;
  }
  
}
  ?>
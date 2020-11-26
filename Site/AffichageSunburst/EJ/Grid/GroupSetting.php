<?php
namespace EJ\Grid;
class GroupSetting {
    
  public function captionFormat ($value) {
    $this -> captionFormat = $value;
    return $this;
  }
  
  public function enableDropAreaAutoSizing ($value) {
    $this -> enableDropAreaAutoSizing = $value;
    return $this;
  }
  
  public function groupedColumns ($value) {
    $this -> groupedColumns = $value;
    return $this;
  }
  
  public function showDropArea ($value) {
    $this -> showDropArea = $value;
    return $this;
  }
  
  public function showGroupedColumn ($value) {
    $this -> showGroupedColumn = $value;
    return $this;
  }
  
  public function showToggleButton ($value) {
    $this -> showToggleButton = $value;
    return $this;
  }
  
  public function showUngroupButton ($value) {
    $this -> showUngroupButton = $value;
    return $this;
  }
  
}
  ?>
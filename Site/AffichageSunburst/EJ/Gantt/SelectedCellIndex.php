<?php
namespace EJ\Gantt;
class SelectedCellIndex {
    
  public function rowIndex ($value) {
    $this -> rowIndex = $value;
    return $this;
  }
  
  public function cellIndex ($value) {
    $this -> cellIndex = $value;
    return $this;
  }
  
}
  ?>
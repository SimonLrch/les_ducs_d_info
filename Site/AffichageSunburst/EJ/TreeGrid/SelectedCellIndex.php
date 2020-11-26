<?php
namespace EJ\TreeGrid;
class SelectedCellIndex {
    
  public function cellIndex ($value) {
    $this -> cellIndex = $value;
    return $this;
  }
  
  public function rowIndex ($value) {
    $this -> rowIndex = $value;
    return $this;
  }
  
}
  ?>
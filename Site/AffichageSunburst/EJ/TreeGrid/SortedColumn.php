<?php
namespace EJ\TreeGrid;
class SortedColumn {
    
  public function direction ($value) {
    $this -> direction = $value;
    return $this;
  }
  
  public function field ($value) {
    $this -> field = $value;
    return $this;
  }
  
}
  ?>
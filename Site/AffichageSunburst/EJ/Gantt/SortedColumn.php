<?php
namespace EJ\Gantt;
class SortedColumn {
    
  public function field ($value) {
    $this -> field = $value;
    return $this;
  }
  
  public function direction ($value) {
    $this -> direction = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\PivotTreeMap;
class Filter {
    
  public function fieldName ($value) {
    $this -> fieldName = $value;
    return $this;
  }
  
  public function filterItems ($value) {
    $this -> filterItems = $value;
    return $this;
  }
  
}
  ?>
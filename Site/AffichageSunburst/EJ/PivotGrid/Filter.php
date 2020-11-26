<?php
namespace EJ\PivotGrid;
class Filter {
    
  public function fieldName ($value) {
    $this -> fieldName = $value;
    return $this;
  }
  
  public function fieldCaption ($value) {
    $this -> fieldCaption = $value;
    return $this;
  }
  
  public function filterItems ($value) {
    $this -> filterItems = $value;
    return $this;
  }
  
}
  ?>
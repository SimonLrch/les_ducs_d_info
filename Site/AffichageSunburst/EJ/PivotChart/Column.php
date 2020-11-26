<?php
namespace EJ\PivotChart;
class Column {
    
  public function fieldName ($value) {
    $this -> fieldName = $value;
    return $this;
  }
  
  public function fieldCaption ($value) {
    $this -> fieldCaption = $value;
    return $this;
  }
  
  public function isNamedSets ($value) {
    $this -> isNamedSets = $value;
    return $this;
  }
  
  public function sortOrder ($value) {
    $this -> sortOrder = $value;
    return $this;
  }
  
  public function filterItems ($value) {
    $this -> filterItems = $value;
    return $this;
  }
  
}
  ?>
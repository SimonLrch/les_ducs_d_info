<?php
namespace EJ\PivotGrid;
class ValueSortSetting {
    
  public function headerText ($value) {
    $this -> headerText = $value;
    return $this;
  }
  
  public function headerDelimiters ($value) {
    $this -> headerDelimiters = $value;
    return $this;
  }
  
  public function sortOrder ($value) {
    $this -> sortOrder = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\PivotGauge;
class FilterItem {
    
  public function filterType ($value) {
    $this -> filterType = $value;
    return $this;
  }
  
  public function values ($value) {
    $this -> values = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\PivotGauge;
class FiltersFilterItem {
    
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
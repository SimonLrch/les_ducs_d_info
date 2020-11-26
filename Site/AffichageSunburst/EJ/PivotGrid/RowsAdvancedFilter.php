<?php
namespace EJ\PivotGrid;
class RowsAdvancedFilter {
    
  public function name ($value) {
    $this -> name = $value;
    return $this;
  }
  
  public function labelFilterOperator ($value) {
    $this -> labelFilterOperator = $value;
    return $this;
  }
  
  public function valueFilterOperator ($value) {
    $this -> valueFilterOperator = $value;
    return $this;
  }
  
  public function advancedFilterType ($value) {
    $this -> advancedFilterType = $value;
    return $this;
  }
  
  public function measure ($value) {
    $this -> measure = $value;
    return $this;
  }
  
  public function values ($value) {
    $this -> values = $value;
    return $this;
  }
  
}
  ?>
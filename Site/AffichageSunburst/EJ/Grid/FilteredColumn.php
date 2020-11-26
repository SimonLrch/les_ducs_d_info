<?php
namespace EJ\Grid;
class FilteredColumn {
    
  public function field ($value) {
    $this -> field = $value;
    return $this;
  }
  
  public function matchCase ($value) {
    $this -> matchCase = $value;
    return $this;
  }
  
  public function operator ($value) {
    $this -> operator = $value;
    return $this;
  }
  
  public function predicate ($value) {
    $this -> predicate = $value;
    return $this;
  }
  
  public function value ($value) {
    $this -> value = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\Gantt;
class FilteredColumn {
    
  public function value ($value) {
    $this -> value = $value;
    return $this;
  }
  
  public function field ($value) {
    $this -> field = $value;
    return $this;
  }
  
  public function predicate ($value) {
    $this -> predicate = $value;
    return $this;
  }
  
  public function operator ($value) {
    $this -> operator = $value;
    return $this;
  }
  
}
  ?>
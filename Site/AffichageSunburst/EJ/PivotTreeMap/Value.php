<?php
namespace EJ\PivotTreeMap;
class Value {
    
  public function axis ($value) {
    $this -> axis = $value;
    return $this;
  }
  
  public function measures ($value) {
    $this -> measures = $value;
    return $this;
  }
  
}
  ?>
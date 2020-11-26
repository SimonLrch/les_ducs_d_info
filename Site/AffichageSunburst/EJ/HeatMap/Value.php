<?php
namespace EJ\HeatMap;
class Value {
    
  public function propertyName ($value) {
    $this -> propertyName = $value;
    return $this;
  }
  
  public function displayName ($value) {
    $this -> displayName = $value;
    return $this;
  }
  
}
  ?>
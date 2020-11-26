<?php
namespace EJ\HeatMap;
class Row {
    
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
<?php
namespace EJ\HeatMap;
class HeaderMapping {
    
  public function propertyName ($value) {
    $this -> propertyName = $value;
    return $this;
  }
  
  public function displayName ($value) {
    $this -> displayName = $value;
    return $this;
  }
  
  public function columnStyle ($value) {
    $this -> columnStyle = $value;
    return $this;
  }
  
}
  ?>
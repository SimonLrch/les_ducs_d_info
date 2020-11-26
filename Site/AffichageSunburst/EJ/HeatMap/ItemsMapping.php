<?php
namespace EJ\HeatMap;
class ItemsMapping {
    
  public function columnMapping ($value) {
    $this -> columnMapping = $value;
    return $this;
  }
  
  public function columnStyle ($value) {
    $this -> columnStyle = $value;
    return $this;
  }
  
  public function column ($value) {
    $this -> column = $value;
    return $this;
  }
  
  public function row ($value) {
    $this -> row = $value;
    return $this;
  }
  
  public function value ($value) {
    $this -> value = $value;
    return $this;
  }
  
  public function headerMapping ($value) {
    $this -> headerMapping = $value;
    return $this;
  }
  
}
  ?>
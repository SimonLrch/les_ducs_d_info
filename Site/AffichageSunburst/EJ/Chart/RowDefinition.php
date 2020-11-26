<?php
namespace EJ\Chart;
class RowDefinition {
    
  public function unit ($value) {
    $this -> unit = $value;
    return $this;
  }
  
  public function rowHeight ($value) {
    $this -> rowHeight = $value;
    return $this;
  }
  
  public function lineColor ($value) {
    $this -> lineColor = $value;
    return $this;
  }
  
  public function lineWidth ($value) {
    $this -> lineWidth = $value;
    return $this;
  }
  
}
  ?>
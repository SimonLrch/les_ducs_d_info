<?php
namespace EJ\Chart;
class ColumnDefinition {
    
  public function unit ($value) {
    $this -> unit = $value;
    return $this;
  }
  
  public function columnWidth ($value) {
    $this -> columnWidth = $value;
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
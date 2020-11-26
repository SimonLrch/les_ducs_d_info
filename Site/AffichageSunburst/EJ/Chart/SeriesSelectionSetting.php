<?php
namespace EJ\Chart;
class SeriesSelectionSetting {
    
  public function enable ($value) {
    $this -> enable = $value;
    return $this;
  }
  
  public function mode ($value) {
    $this -> mode = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function rangeType ($value) {
    $this -> rangeType = $value;
    return $this;
  }
  
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
  public function pattern ($value) {
    $this -> pattern = $value;
    return $this;
  }
  
  public function customPattern ($value) {
    $this -> customPattern = $value;
    return $this;
  }
  
  public function border ($value) {
    $this -> border = $value;
    return $this;
  }
  
}
  ?>
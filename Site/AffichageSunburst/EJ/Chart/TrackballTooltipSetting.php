<?php
namespace EJ\Chart;
class TrackballTooltipSetting {
    
  public function fill ($value) {
    $this -> fill = $value;
    return $this;
  }
  
  public function rx ($value) {
    $this -> rx = $value;
    return $this;
  }
  
  public function ry ($value) {
    $this -> ry = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
  public function mode ($value) {
    $this -> mode = $value;
    return $this;
  }
  
  public function border ($value) {
    $this -> border = $value;
    return $this;
  }
  
}
  ?>
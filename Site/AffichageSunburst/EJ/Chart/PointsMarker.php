<?php
namespace EJ\Chart;
class PointsMarker {
    
  public function fill ($value) {
    $this -> fill = $value;
    return $this;
  }
  
  public function imageUrl ($value) {
    $this -> imageUrl = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
  public function shape ($value) {
    $this -> shape = $value;
    return $this;
  }
  
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
  public function border ($value) {
    $this -> border = $value;
    return $this;
  }
  
  public function dataLabel ($value) {
    $this -> dataLabel = $value;
    return $this;
  }
  
  public function size ($value) {
    $this -> size = $value;
    return $this;
  }
  
}
  ?>
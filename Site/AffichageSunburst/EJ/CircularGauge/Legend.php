<?php
namespace EJ\CircularGauge;
class Legend {
    
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
  public function toggleVisibility ($value) {
    $this -> toggleVisibility = $value;
    return $this;
  }
  
  public function alignment ($value) {
    $this -> alignment = $value;
    return $this;
  }
  
  public function fill ($value) {
    $this -> fill = $value;
    return $this;
  }
  
  public function itemPadding ($value) {
    $this -> itemPadding = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
  public function position ($value) {
    $this -> position = $value;
    return $this;
  }
  
  public function shape ($value) {
    $this -> shape = $value;
    return $this;
  }
  
  public function border ($value) {
    $this -> border = $value;
    return $this;
  }
  
  public function itemStyle ($value) {
    $this -> itemStyle = $value;
    return $this;
  }
  
  public function size ($value) {
    $this -> size = $value;
    return $this;
  }
  
  public function font ($value) {
    $this -> font = $value;
    return $this;
  }
  
}
  ?>
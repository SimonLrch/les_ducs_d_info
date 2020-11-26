<?php
namespace EJ\Chart;
class PrimaryYAxisMultiLevelLabel {
    
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function start ($value) {
    $this -> start = $value;
    return $this;
  }
  
  public function end ($value) {
    $this -> end = $value;
    return $this;
  }
  
  public function level ($value) {
    $this -> level = $value;
    return $this;
  }
  
  public function maximumTextWidth ($value) {
    $this -> maximumTextWidth = $value;
    return $this;
  }
  
  public function textAlignment ($value) {
    $this -> textAlignment = $value;
    return $this;
  }
  
  public function textOverflow ($value) {
    $this -> textOverflow = $value;
    return $this;
  }
  
  public function font ($value) {
    $this -> font = $value;
    return $this;
  }
  
  public function border ($value) {
    $this -> border = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\Chart;
class PrimaryXAxisTitle {
    
  public function enableTrim ($value) {
    $this -> enableTrim = $value;
    return $this;
  }
  
  public function maximumTitleWidth ($value) {
    $this -> maximumTitleWidth = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
  public function offset ($value) {
    $this -> offset = $value;
    return $this;
  }
  
  public function position ($value) {
    $this -> position = $value;
    return $this;
  }
  
  public function alignment ($value) {
    $this -> alignment = $value;
    return $this;
  }
  
  public function font ($value) {
    $this -> font = $value;
    return $this;
  }
  
}
  ?>
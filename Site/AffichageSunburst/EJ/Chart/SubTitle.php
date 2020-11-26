<?php
namespace EJ\Chart;
class SubTitle {
    
  public function background ($value) {
    $this -> background = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function textAlignment ($value) {
    $this -> textAlignment = $value;
    return $this;
  }
  
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
  public function enableTrim ($value) {
    $this -> enableTrim = $value;
    return $this;
  }
  
  public function maximumWidth ($value) {
    $this -> maximumWidth = $value;
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
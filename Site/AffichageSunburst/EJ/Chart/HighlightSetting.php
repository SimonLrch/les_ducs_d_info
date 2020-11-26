<?php
namespace EJ\Chart;
class HighlightSetting {
    
  public function enable ($value) {
    $this -> enable = $value;
    return $this;
  }
  
  public function mode ($value) {
    $this -> mode = $value;
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
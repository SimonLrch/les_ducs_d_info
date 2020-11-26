<?php
namespace EJ\Chart;
class SubTitleBorder {
    
  public function width ($value) {
    $this -> width = $value;
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
  
  public function cornerRadius ($value) {
    $this -> cornerRadius = $value;
    return $this;
  }
  
}
  ?>
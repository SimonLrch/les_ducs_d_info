<?php
namespace EJ\CircularGauge;
class SubGauge {
    
  public function height ($value) {
    $this -> height = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
  public function position ($value) {
    $this -> position = $value;
    return $this;
  }
  
}
  ?>
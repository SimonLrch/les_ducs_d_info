<?php
namespace EJ\Chart;
class Line {
    
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
}
  ?>
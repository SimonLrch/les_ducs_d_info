<?php
namespace EJ\Chart;
class MacdLine {
    
  public function fill ($value) {
    $this -> fill = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
}
  ?>
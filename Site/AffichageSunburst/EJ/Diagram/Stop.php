<?php
namespace EJ\Diagram;
class Stop {
    
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function offset ($value) {
    $this -> offset = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
}
  ?>
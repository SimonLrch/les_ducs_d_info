<?php
namespace EJ\Sparkline;
class Tooltip {
    
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
  public function fill ($value) {
    $this -> fill = $value;
    return $this;
  }
  
  public function template ($value) {
    $this -> template = $value;
    return $this;
  }
  
  public function border ($value) {
    $this -> border = $value;
    return $this;
  }
  
  public function font ($value) {
    $this -> font = $value;
    return $this;
  }
  
}
  ?>
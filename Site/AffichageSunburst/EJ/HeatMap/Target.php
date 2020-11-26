<?php
namespace EJ\HeatMap;
class Target {
    
  public function horizontal ($value) {
    $this -> horizontal = $value;
    return $this;
  }
  
  public function vertical ($value) {
    $this -> vertical = $value;
    return $this;
  }
  
}
  ?>
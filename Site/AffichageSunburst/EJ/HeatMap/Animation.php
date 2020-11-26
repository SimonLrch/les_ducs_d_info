<?php
namespace EJ\HeatMap;
class Animation {
    
  public function effect ($value) {
    $this -> effect = $value;
    return $this;
  }
  
  public function speed ($value) {
    $this -> speed = $value;
    return $this;
  }
  
}
  ?>
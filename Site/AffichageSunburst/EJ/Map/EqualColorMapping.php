<?php
namespace EJ\Map;
class EqualColorMapping {
    
  public function value ($value) {
    $this -> value = $value;
    return $this;
  }
  
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
}
  ?>
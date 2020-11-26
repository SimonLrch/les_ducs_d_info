<?php
namespace EJ\RadialMenu;
class Badge {
    
  public function enabled ($value) {
    $this -> enabled = $value;
    return $this;
  }
  
  public function value ($value) {
    $this -> value = $value;
    return $this;
  }
  
}
  ?>
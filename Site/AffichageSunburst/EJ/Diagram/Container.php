<?php
namespace EJ\Diagram;
class Container {
    
  public function orientation ($value) {
    $this -> orientation = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\Map;
class NavigationControl {
    
  public function absolutePosition ($value) {
    $this -> absolutePosition = $value;
    return $this;
  }
  
  public function content ($value) {
    $this -> content = $value;
    return $this;
  }
  
  public function dockPosition ($value) {
    $this -> dockPosition = $value;
    return $this;
  }
  
  public function enableNavigation ($value) {
    $this -> enableNavigation = $value;
    return $this;
  }
  
  public function orientation ($value) {
    $this -> orientation = $value;
    return $this;
  }
  
}
  ?>
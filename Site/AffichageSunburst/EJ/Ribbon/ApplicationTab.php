<?php
namespace EJ\Ribbon;
class ApplicationTab {
    
  public function menuItemID ($value) {
    $this -> menuItemID = $value;
    return $this;
  }
  
  public function menuSettings ($value) {
    $this -> menuSettings = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function backstageSettings ($value) {
    $this -> backstageSettings = $value;
    return $this;
  }
  
}
  ?>
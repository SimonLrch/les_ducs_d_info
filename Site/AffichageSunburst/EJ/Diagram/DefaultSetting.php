<?php
namespace EJ\Diagram;
class DefaultSetting {
    
  public function connector ($value) {
    $this -> connector = $value;
    return $this;
  }
  
  public function group ($value) {
    $this -> group = $value;
    return $this;
  }
  
  public function node ($value) {
    $this -> node = $value;
    return $this;
  }
  
}
  ?>
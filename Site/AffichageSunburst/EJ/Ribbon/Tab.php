<?php
namespace EJ\Ribbon;
class Tab {
    
  public function id ($value) {
    $this -> id = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function groups ($value) {
    $this -> groups = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\Schedule;
class MenuItem {
    
  public function appointment ($value) {
    $this -> appointment = $value;
    return $this;
  }
  
  public function cells ($value) {
    $this -> cells = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\Diagram;
class Event {
    
  public function event ($value) {
    $this -> event = $value;
    return $this;
  }
  
  public function offset ($value) {
    $this -> offset = $value;
    return $this;
  }
  
  public function name ($value) {
    $this -> name = $value;
    return $this;
  }
  
  public function trigger ($value) {
    $this -> trigger = $value;
    return $this;
  }
  
  public function ports ($value) {
    $this -> ports = $value;
    return $this;
  }
  
  public function labels ($value) {
    $this -> labels = $value;
    return $this;
  }
  
}
  ?>
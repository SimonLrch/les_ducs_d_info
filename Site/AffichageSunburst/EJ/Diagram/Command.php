<?php
namespace EJ\Diagram;
class Command {
    
  public function canExecute ($value) {
    $this -> canExecute = $value;
    return $this;
  }
  
  public function execute ($value) {
    $this -> execute = $value;
    return $this;
  }
  
  public function parameter ($value) {
    $this -> parameter = $value;
    return $this;
  }
  
  public function gesture ($value) {
    $this -> gesture = $value;
    return $this;
  }
  
}
  ?>
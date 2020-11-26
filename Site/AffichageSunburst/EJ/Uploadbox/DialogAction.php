<?php
namespace EJ\Uploadbox;
class DialogAction {
    
  public function closeOnComplete ($value) {
    $this -> closeOnComplete = $value;
    return $this;
  }
  
  public function content ($value) {
    $this -> content = $value;
    return $this;
  }
  
  public function drag ($value) {
    $this -> drag = $value;
    return $this;
  }
  
  public function modal ($value) {
    $this -> modal = $value;
    return $this;
  }
  
}
  ?>
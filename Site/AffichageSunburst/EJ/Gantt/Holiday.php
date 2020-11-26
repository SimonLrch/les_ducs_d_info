<?php
namespace EJ\Gantt;
class Holiday {
    
  public function day ($value) {
    $this -> day = $value;
    return $this;
  }
  
  public function background ($value) {
    $this -> background = $value;
    return $this;
  }
  
  public function label ($value) {
    $this -> label = $value;
    return $this;
  }
  
}
  ?>
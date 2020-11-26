<?php
namespace EJ\Schedule;
class RenderDate {
    
  public function start ($value) {
    $this -> start = $value;
    return $this;
  }
  
  public function end ($value) {
    $this -> end = $value;
    return $this;
  }
  
}
  ?>
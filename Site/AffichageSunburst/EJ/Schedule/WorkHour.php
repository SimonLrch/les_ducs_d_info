<?php
namespace EJ\Schedule;
class WorkHour {
    
  public function highlight ($value) {
    $this -> highlight = $value;
    return $this;
  }
  
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
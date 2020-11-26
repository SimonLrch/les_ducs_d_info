<?php
namespace EJ\Gantt;
class SplitterSetting {
    
  public function position ($value) {
    $this -> position = $value;
    return $this;
  }
  
  public function index ($value) {
    $this -> index = $value;
    return $this;
  }
  
}
  ?>
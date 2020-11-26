<?php
namespace EJ\Gantt;
class StripLine {
    
  public function day ($value) {
    $this -> day = $value;
    return $this;
  }
  
  public function label ($value) {
    $this -> label = $value;
    return $this;
  }
  
  public function lineStyle ($value) {
    $this -> lineStyle = $value;
    return $this;
  }
  
  public function lineColor ($value) {
    $this -> lineColor = $value;
    return $this;
  }
  
  public function lineWidth ($value) {
    $this -> lineWidth = $value;
    return $this;
  }
  
}
  ?>
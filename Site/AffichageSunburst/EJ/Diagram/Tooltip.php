<?php
namespace EJ\Diagram;
class Tooltip {
    
  public function margin ($value) {
    $this -> margin = $value;
    return $this;
  }
  
  public function relativeMode ($value) {
    $this -> relativeMode = $value;
    return $this;
  }
  
  public function templateId ($value) {
    $this -> templateId = $value;
    return $this;
  }
  
  public function alignment ($value) {
    $this -> alignment = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\Diagram;
class RulerSetting {
    
  public function showRulers ($value) {
    $this -> showRulers = $value;
    return $this;
  }
  
  public function horizontalRuler ($value) {
    $this -> horizontalRuler = $value;
    return $this;
  }
  
  public function verticalRuler ($value) {
    $this -> verticalRuler = $value;
    return $this;
  }
  
}
  ?>
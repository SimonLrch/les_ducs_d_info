<?php
namespace EJ\Sparkline;
class AxisLineSetting {
    
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
  public function dashArray ($value) {
    $this -> dashArray = $value;
    return $this;
  }
  
}
  ?>
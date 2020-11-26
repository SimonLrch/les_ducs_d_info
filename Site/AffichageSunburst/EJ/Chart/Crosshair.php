<?php
namespace EJ\Chart;
class Crosshair {
    
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
  public function trackballTooltipSettings ($value) {
    $this -> trackballTooltipSettings = $value;
    return $this;
  }
  
  public function marker ($value) {
    $this -> marker = $value;
    return $this;
  }
  
  public function line ($value) {
    $this -> line = $value;
    return $this;
  }
  
}
  ?>
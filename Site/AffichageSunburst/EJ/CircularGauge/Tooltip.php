<?php
namespace EJ\CircularGauge;
class Tooltip {
    
  public function showCustomLabelTooltip ($value) {
    $this -> showCustomLabelTooltip = $value;
    return $this;
  }
  
  public function showLabelTooltip ($value) {
    $this -> showLabelTooltip = $value;
    return $this;
  }
  
  public function templateID ($value) {
    $this -> templateID = $value;
    return $this;
  }
  
}
  ?>
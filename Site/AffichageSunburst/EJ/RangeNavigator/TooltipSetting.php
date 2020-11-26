<?php
namespace EJ\RangeNavigator;
class TooltipSetting {
    
  public function backgroundColor ($value) {
    $this -> backgroundColor = $value;
    return $this;
  }
  
  public function labelFormat ($value) {
    $this -> labelFormat = $value;
    return $this;
  }
  
  public function tooltipDisplayMode ($value) {
    $this -> tooltipDisplayMode = $value;
    return $this;
  }
  
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
  public function font ($value) {
    $this -> font = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\Chart;
class SeriesEmptyPointSetting {
    
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
  public function displayMode ($value) {
    $this -> displayMode = $value;
    return $this;
  }
  
  public function style ($value) {
    $this -> style = $value;
    return $this;
  }
  
}
  ?>
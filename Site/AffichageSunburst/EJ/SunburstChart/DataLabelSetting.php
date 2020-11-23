<?php
namespace EJ\SunburstChart;
class DataLabelSetting {
    
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
  public function labelRotationMode ($value) {
    $this -> labelRotationMode = $value;
    return $this;
  }
  
  public function template ($value) {
    $this -> template = $value;
    return $this;
  }
  
  public function fill ($value) {
    $this -> fill = $value;
    return $this;
  }
  
  public function labelOverflowMode ($value) {
    $this -> labelOverflowMode = $value;
    return $this;
  }
  
  public function font ($value) {
    $this -> font = $value;
    return $this;
  }
  
}
  ?>
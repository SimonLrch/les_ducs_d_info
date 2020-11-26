<?php
namespace EJ\HeatMap;
class TooltipSetting {
    
  public function templateId ($value) {
    $this -> templateId = $value;
    return $this;
  }
  
  public function associate ($value) {
    $this -> associate = $value;
    return $this;
  }
  
  public function isBalloon ($value) {
    $this -> isBalloon = $value;
    return $this;
  }
  
  public function trigger ($value) {
    $this -> trigger = $value;
    return $this;
  }
  
  public function position ($value) {
    $this -> position = $value;
    return $this;
  }
  
  public function animation ($value) {
    $this -> animation = $value;
    return $this;
  }
  
}
  ?>
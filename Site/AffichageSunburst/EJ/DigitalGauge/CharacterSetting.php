<?php
namespace EJ\DigitalGauge;
class CharacterSetting {
    
  public function count ($value) {
    $this -> count = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
  public function spacing ($value) {
    $this -> spacing = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
}
  ?>
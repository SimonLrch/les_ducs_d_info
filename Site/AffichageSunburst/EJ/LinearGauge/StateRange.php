<?php
namespace EJ\LinearGauge;
class StateRange {
    
  public function backgroundColor ($value) {
    $this -> backgroundColor = $value;
    return $this;
  }
  
  public function borderColor ($value) {
    $this -> borderColor = $value;
    return $this;
  }
  
  public function endValue ($value) {
    $this -> endValue = $value;
    return $this;
  }
  
  public function startValue ($value) {
    $this -> startValue = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function textColor ($value) {
    $this -> textColor = $value;
    return $this;
  }
  
}
  ?>
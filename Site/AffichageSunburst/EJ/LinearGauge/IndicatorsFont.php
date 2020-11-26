<?php
namespace EJ\LinearGauge;
class IndicatorsFont {
    
  public function fontFamily ($value) {
    $this -> fontFamily = $value;
    return $this;
  }
  
  public function fontStyle ($value) {
    $this -> fontStyle = $value;
    return $this;
  }
  
  public function size ($value) {
    $this -> size = $value;
    return $this;
  }
  
}
  ?>
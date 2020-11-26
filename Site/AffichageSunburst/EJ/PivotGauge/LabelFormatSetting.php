<?php
namespace EJ\PivotGauge;
class LabelFormatSetting {
    
  public function numberFormat ($value) {
    $this -> numberFormat = $value;
    return $this;
  }
  
  public function decimalPlaces ($value) {
    $this -> decimalPlaces = $value;
    return $this;
  }
  
  public function prefixText ($value) {
    $this -> prefixText = $value;
    return $this;
  }
  
  public function suffixText ($value) {
    $this -> suffixText = $value;
    return $this;
  }
  
}
  ?>
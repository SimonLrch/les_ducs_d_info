<?php
namespace EJ\Map;
class LabelSetting {
    
  public function enableSmartLabel ($value) {
    $this -> enableSmartLabel = $value;
    return $this;
  }
  
  public function labelLength ($value) {
    $this -> labelLength = $value;
    return $this;
  }
  
  public function labelPath ($value) {
    $this -> labelPath = $value;
    return $this;
  }
  
  public function showLabels ($value) {
    $this -> showLabels = $value;
    return $this;
  }
  
  public function smartLabelSize ($value) {
    $this -> smartLabelSize = $value;
    return $this;
  }
  
  public function font ($value) {
    $this -> font = $value;
    return $this;
  }
  
}
  ?>
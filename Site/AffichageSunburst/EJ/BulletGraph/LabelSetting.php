<?php
namespace EJ\BulletGraph;
class LabelSetting {
    
  public function labelPlacement ($value) {
    $this -> labelPlacement = $value;
    return $this;
  }
  
  public function labelPrefix ($value) {
    $this -> labelPrefix = $value;
    return $this;
  }
  
  public function labelSuffix ($value) {
    $this -> labelSuffix = $value;
    return $this;
  }
  
  public function offset ($value) {
    $this -> offset = $value;
    return $this;
  }
  
  public function position ($value) {
    $this -> position = $value;
    return $this;
  }
  
  public function size ($value) {
    $this -> size = $value;
    return $this;
  }
  
  public function stroke ($value) {
    $this -> stroke = $value;
    return $this;
  }
  
  public function font ($value) {
    $this -> font = $value;
    return $this;
  }
  
}
  ?>
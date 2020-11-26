<?php
namespace EJ\RangeNavigator;
class ValueAxisSetting {
    
  public function rangePadding ($value) {
    $this -> rangePadding = $value;
    return $this;
  }
  
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
  public function axisLine ($value) {
    $this -> axisLine = $value;
    return $this;
  }
  
  public function font ($value) {
    $this -> font = $value;
    return $this;
  }
  
  public function majorGridLines ($value) {
    $this -> majorGridLines = $value;
    return $this;
  }
  
  public function majorTickLines ($value) {
    $this -> majorTickLines = $value;
    return $this;
  }
  
  public function range ($value) {
    $this -> range = $value;
    return $this;
  }
  
}
  ?>
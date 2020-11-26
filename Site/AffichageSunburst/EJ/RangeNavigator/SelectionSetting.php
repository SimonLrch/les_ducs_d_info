<?php
namespace EJ\RangeNavigator;
class SelectionSetting {
    
  public function enable ($value) {
    $this -> enable = $value;
    return $this;
  }
  
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
  public function border ($value) {
    $this -> border = $value;
    return $this;
  }
  
}
  ?>
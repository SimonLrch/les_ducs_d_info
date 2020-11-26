<?php
namespace EJ\RangeNavigator;
class StyleFont {
    
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function family ($value) {
    $this -> family = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
  public function size ($value) {
    $this -> size = $value;
    return $this;
  }
  
  public function style ($value) {
    $this -> style = $value;
    return $this;
  }
  
  public function weight ($value) {
    $this -> weight = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\TreeMap;
class DesaturationColorMapping {
    
  public function to ($value) {
    $this -> to = $value;
    return $this;
  }
  
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function from ($value) {
    $this -> from = $value;
    return $this;
  }
  
  public function rangeMaximum ($value) {
    $this -> rangeMaximum = $value;
    return $this;
  }
  
  public function rangeMinimum ($value) {
    $this -> rangeMinimum = $value;
    return $this;
  }
  
}
  ?>
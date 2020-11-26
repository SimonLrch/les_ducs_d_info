<?php
namespace EJ\TreeMap;
class RangeColorMapping {
    
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function gradientColors ($value) {
    $this -> gradientColors = $value;
    return $this;
  }
  
  public function from ($value) {
    $this -> from = $value;
    return $this;
  }
  
  public function legendLabel ($value) {
    $this -> legendLabel = $value;
    return $this;
  }
  
  public function to ($value) {
    $this -> to = $value;
    return $this;
  }
  
}
  ?>
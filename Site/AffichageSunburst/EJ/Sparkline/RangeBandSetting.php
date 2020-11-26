<?php
namespace EJ\Sparkline;
class RangeBandSetting {
    
  public function startRange ($value) {
    $this -> startRange = $value;
    return $this;
  }
  
  public function endRange ($value) {
    $this -> endRange = $value;
    return $this;
  }
  
  public function opacity ($value) {
    $this -> opacity = $value;
    return $this;
  }
  
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
}
  ?>
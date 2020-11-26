<?php
namespace EJ\PivotGrid;
class FrozenHeaderSetting {
    
  public function enableFrozenRowHeaders ($value) {
    $this -> enableFrozenRowHeaders = $value;
    return $this;
  }
  
  public function enableFrozenColumnHeaders ($value) {
    $this -> enableFrozenColumnHeaders = $value;
    return $this;
  }
  
  public function enableFrozenHeaders ($value) {
    $this -> enableFrozenHeaders = $value;
    return $this;
  }
  
  public function scrollerSize ($value) {
    $this -> scrollerSize = $value;
    return $this;
  }
  
}
  ?>
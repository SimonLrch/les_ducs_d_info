<?php
namespace EJ\PivotGrid;
class HeaderSetting {
    
  public function showRowItems ($value) {
    $this -> showRowItems = $value;
    return $this;
  }
  
  public function showColumnItems ($value) {
    $this -> showColumnItems = $value;
    return $this;
  }
  
}
  ?>
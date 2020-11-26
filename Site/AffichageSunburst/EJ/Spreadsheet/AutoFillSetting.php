<?php
namespace EJ\Spreadsheet;
class AutoFillSetting {
    
  public function fillType ($value) {
    $this -> fillType = $value;
    return $this;
  }
  
  public function showFillOptions ($value) {
    $this -> showFillOptions = $value;
    return $this;
  }
  
}
  ?>
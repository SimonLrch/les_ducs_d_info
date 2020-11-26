<?php
namespace EJ\Spreadsheet;
class MenuSetting {
    
  public function isAppend ($value) {
    $this -> isAppend = $value;
    return $this;
  }
  
  public function dataSource ($value) {
    $this -> dataSource = $value;
    return $this;
  }
  
}
  ?>
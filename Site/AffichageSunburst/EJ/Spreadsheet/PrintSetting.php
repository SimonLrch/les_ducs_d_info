<?php
namespace EJ\Spreadsheet;
class PrintSetting {
    
  public function allowPageSetup ($value) {
    $this -> allowPageSetup = $value;
    return $this;
  }
  
  public function allowPageSize ($value) {
    $this -> allowPageSize = $value;
    return $this;
  }
  
  public function allowPrinting ($value) {
    $this -> allowPrinting = $value;
    return $this;
  }
  
}
  ?>
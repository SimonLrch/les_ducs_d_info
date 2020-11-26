<?php
namespace EJ\Spreadsheet;
class ImportSetting {
    
  public function importMapper ($value) {
    $this -> importMapper = $value;
    return $this;
  }
  
  public function importOnLoad ($value) {
    $this -> importOnLoad = $value;
    return $this;
  }
  
  public function importUrl ($value) {
    $this -> importUrl = $value;
    return $this;
  }
  
  public function password ($value) {
    $this -> password = $value;
    return $this;
  }
  
}
  ?>
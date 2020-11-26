<?php
namespace EJ\Spreadsheet;
class Hyperlink {
    
  public function webAddr ($value) {
    $this -> webAddr = $value;
    return $this;
  }
  
  public function cellAddr ($value) {
    $this -> cellAddr = $value;
    return $this;
  }
  
  public function sheetIndex ($value) {
    $this -> sheetIndex = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\Spreadsheet;
class Format {
    
  public function decimalPlaces ($value) {
    $this -> decimalPlaces = $value;
    return $this;
  }
  
  public function formatStr ($value) {
    $this -> formatStr = $value;
    return $this;
  }
  
  public function thousandSeparator ($value) {
    $this -> thousandSeparator = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
}
  ?>
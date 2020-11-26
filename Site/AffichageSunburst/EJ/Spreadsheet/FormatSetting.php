<?php
namespace EJ\Spreadsheet;
class FormatSetting {
    
  public function allowCellBorder ($value) {
    $this -> allowCellBorder = $value;
    return $this;
  }
  
  public function allowDecimalPlaces ($value) {
    $this -> allowDecimalPlaces = $value;
    return $this;
  }
  
  public function allowFontFamily ($value) {
    $this -> allowFontFamily = $value;
    return $this;
  }
  
}
  ?>
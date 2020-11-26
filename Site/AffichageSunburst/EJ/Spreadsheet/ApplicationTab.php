<?php
namespace EJ\Spreadsheet;
class ApplicationTab {
    
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function menuSettings ($value) {
    $this -> menuSettings = $value;
    return $this;
  }
  
}
  ?>
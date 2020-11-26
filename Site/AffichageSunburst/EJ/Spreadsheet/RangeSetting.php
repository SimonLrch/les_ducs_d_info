<?php
namespace EJ\Spreadsheet;
class RangeSetting {
    
  public function dataSource ($value) {
    $this -> dataSource = $value;
    return $this;
  }
  
  public function headerStyles ($value) {
    $this -> headerStyles = $value;
    return $this;
  }
  
  public function primaryKey ($value) {
    $this -> primaryKey = $value;
    return $this;
  }
  
  public function query ($value) {
    $this -> query = $value;
    return $this;
  }
  
  public function showHeader ($value) {
    $this -> showHeader = $value;
    return $this;
  }
  
  public function startCell ($value) {
    $this -> startCell = $value;
    return $this;
  }
  
}
  ?>
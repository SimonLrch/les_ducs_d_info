<?php
namespace EJ\Spreadsheet;
class Sheet {
    
  public function cellTypes ($value) {
    $this -> cellTypes = $value;
    return $this;
  }
  
  public function colCount ($value) {
    $this -> colCount = $value;
    return $this;
  }
  
  public function columnWidth ($value) {
    $this -> columnWidth = $value;
    return $this;
  }
  
  public function dataSource ($value) {
    $this -> dataSource = $value;
    return $this;
  }
  
  public function fieldAsColumnHeader ($value) {
    $this -> fieldAsColumnHeader = $value;
    return $this;
  }
  
  public function frozenRows ($value) {
    $this -> frozenRows = $value;
    return $this;
  }
  
  public function frozenColumns ($value) {
    $this -> frozenColumns = $value;
    return $this;
  }
  
  public function headerStyles ($value) {
    $this -> headerStyles = $value;
    return $this;
  }
  
  public function hideColumns ($value) {
    $this -> hideColumns = $value;
    return $this;
  }
  
  public function hideRows ($value) {
    $this -> hideRows = $value;
    return $this;
  }
  
  public function mergeCells ($value) {
    $this -> mergeCells = $value;
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
  
  public function rowCount ($value) {
    $this -> rowCount = $value;
    return $this;
  }
  
  public function showGridlines ($value) {
    $this -> showGridlines = $value;
    return $this;
  }
  
  public function showHeader ($value) {
    $this -> showHeader = $value;
    return $this;
  }
  
  public function showHeadings ($value) {
    $this -> showHeadings = $value;
    return $this;
  }
  
  public function sheetName ($value) {
    $this -> sheetName = $value;
    return $this;
  }
  
  public function startCell ($value) {
    $this -> startCell = $value;
    return $this;
  }
  
  public function border ($value) {
    $this -> border = $value;
    return $this;
  }
  
  public function cFormatRule ($value) {
    $this -> cFormatRule = $value;
    return $this;
  }
  
  public function rangeSettings ($value) {
    $this -> rangeSettings = $value;
    return $this;
  }
  
  public function rows ($value) {
    $this -> rows = $value;
    return $this;
  }
  
}
  ?>
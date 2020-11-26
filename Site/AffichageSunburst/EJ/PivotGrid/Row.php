<?php
namespace EJ\PivotGrid;
class Row {
    
  public function fieldName ($value) {
    $this -> fieldName = $value;
    return $this;
  }
  
  public function fieldCaption ($value) {
    $this -> fieldCaption = $value;
    return $this;
  }
  
  public function isNamedSets ($value) {
    $this -> isNamedSets = $value;
    return $this;
  }
  
  public function showSubTotal ($value) {
    $this -> showSubTotal = $value;
    return $this;
  }
  
  public function format ($value) {
    $this -> format = $value;
    return $this;
  }
  
  public function formatString ($value) {
    $this -> formatString = $value;
    return $this;
  }
  
  public function cssClass ($value) {
    $this -> cssClass = $value;
    return $this;
  }
  
  public function delimiter ($value) {
    $this -> delimiter = $value;
    return $this;
  }
  
  public function sortOrder ($value) {
    $this -> sortOrder = $value;
    return $this;
  }
  
  public function drilledItems ($value) {
    $this -> drilledItems = $value;
    return $this;
  }
  
  public function advancedFilter ($value) {
    $this -> advancedFilter = $value;
    return $this;
  }
  
  public function filterItems ($value) {
    $this -> filterItems = $value;
    return $this;
  }
  
}
  ?>
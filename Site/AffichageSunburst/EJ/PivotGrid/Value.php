<?php
namespace EJ\PivotGrid;
class Value {
    
  public function fieldName ($value) {
    $this -> fieldName = $value;
    return $this;
  }
  
  public function fieldCaption ($value) {
    $this -> fieldCaption = $value;
    return $this;
  }
  
  public function axis ($value) {
    $this -> axis = $value;
    return $this;
  }
  
  public function isCalculatedField ($value) {
    $this -> isCalculatedField = $value;
    return $this;
  }
  
  public function summaryType ($value) {
    $this -> summaryType = $value;
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
  
  public function formula ($value) {
    $this -> formula = $value;
    return $this;
  }
  
  public function cssClass ($value) {
    $this -> cssClass = $value;
    return $this;
  }
  
  public function measures ($value) {
    $this -> measures = $value;
    return $this;
  }
  
}
  ?>
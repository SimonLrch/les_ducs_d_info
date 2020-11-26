<?php
namespace EJ\TreeGrid;
class SummaryColumn {
    
  public function customSummaryValue ($value) {
    $this -> customSummaryValue = $value;
    return $this;
  }
  
  public function dataMember ($value) {
    $this -> dataMember = $value;
    return $this;
  }
  
  public function displayColumn ($value) {
    $this -> displayColumn = $value;
    return $this;
  }
  
  public function format ($value) {
    $this -> format = $value;
    return $this;
  }
  
  public function prefix ($value) {
    $this -> prefix = $value;
    return $this;
  }
  
  public function suffix ($value) {
    $this -> suffix = $value;
    return $this;
  }
  
  public function summaryType ($value) {
    $this -> summaryType = $value;
    return $this;
  }
  
}
  ?>
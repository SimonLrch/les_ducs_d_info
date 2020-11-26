<?php
namespace EJ\PivotGrid;
class HyperlinkSetting {
    
  public function enableColumnHeaderHyperlink ($value) {
    $this -> enableColumnHeaderHyperlink = $value;
    return $this;
  }
  
  public function enableRowHeaderHyperlink ($value) {
    $this -> enableRowHeaderHyperlink = $value;
    return $this;
  }
  
  public function enableSummaryCellHyperlink ($value) {
    $this -> enableSummaryCellHyperlink = $value;
    return $this;
  }
  
  public function enableValueCellHyperlink ($value) {
    $this -> enableValueCellHyperlink = $value;
    return $this;
  }
  
}
  ?>
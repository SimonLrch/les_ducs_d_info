<?php
namespace EJ\Grid;
class SummaryRow {
    
  public function showCaptionSummary ($value) {
    $this -> showCaptionSummary = $value;
    return $this;
  }
  
  public function showGroupSummary ($value) {
    $this -> showGroupSummary = $value;
    return $this;
  }
  
  public function showTotalSummary ($value) {
    $this -> showTotalSummary = $value;
    return $this;
  }
  
  public function title ($value) {
    $this -> title = $value;
    return $this;
  }
  
  public function titleColumn ($value) {
    $this -> titleColumn = $value;
    return $this;
  }
  
  public function summaryColumns ($value) {
    $this -> summaryColumns = $value;
    return $this;
  }
  
}
  ?>
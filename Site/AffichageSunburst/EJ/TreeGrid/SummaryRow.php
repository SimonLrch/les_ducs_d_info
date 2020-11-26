<?php
namespace EJ\TreeGrid;
class SummaryRow {
    
  public function title ($value) {
    $this -> title = $value;
    return $this;
  }
  
  public function summaryColumns ($value) {
    $this -> summaryColumns = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\PivotGrid;
class PagerOption {
    
  public function categoricalPageSize ($value) {
    $this -> categoricalPageSize = $value;
    return $this;
  }
  
  public function seriesPageSize ($value) {
    $this -> seriesPageSize = $value;
    return $this;
  }
  
  public function categoricalCurrentPage ($value) {
    $this -> categoricalCurrentPage = $value;
    return $this;
  }
  
  public function seriesCurrentPage ($value) {
    $this -> seriesCurrentPage = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\Spreadsheet;
class ScrollSetting {
    
  public function allowScrolling ($value) {
    $this -> allowScrolling = $value;
    return $this;
  }
  
  public function allowSheetOnDemand ($value) {
    $this -> allowSheetOnDemand = $value;
    return $this;
  }
  
  public function allowVirtualScrolling ($value) {
    $this -> allowVirtualScrolling = $value;
    return $this;
  }
  
  public function height ($value) {
    $this -> height = $value;
    return $this;
  }
  
  public function isResponsive ($value) {
    $this -> isResponsive = $value;
    return $this;
  }
  
  public function scrollMode ($value) {
    $this -> scrollMode = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
}
  ?>
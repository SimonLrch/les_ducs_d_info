<?php
namespace EJ\Grid;
class ScrollSetting {
    
  public function allowVirtualScrolling ($value) {
    $this -> allowVirtualScrolling = $value;
    return $this;
  }
  
  public function autoHide ($value) {
    $this -> autoHide = $value;
    return $this;
  }
  
  public function buttonSize ($value) {
    $this -> buttonSize = $value;
    return $this;
  }
  
  public function enableTouchScroll ($value) {
    $this -> enableTouchScroll = $value;
    return $this;
  }
  
  public function frozenColumns ($value) {
    $this -> frozenColumns = $value;
    return $this;
  }
  
  public function frozenRows ($value) {
    $this -> frozenRows = $value;
    return $this;
  }
  
  public function height ($value) {
    $this -> height = $value;
    return $this;
  }
  
  public function scrollerSize ($value) {
    $this -> scrollerSize = $value;
    return $this;
  }
  
  public function virtualScrollMode ($value) {
    $this -> virtualScrollMode = $value;
    return $this;
  }
  
  public function enableVirtualization ($value) {
    $this -> enableVirtualization = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
  public function scrollOneStepBy ($value) {
    $this -> scrollOneStepBy = $value;
    return $this;
  }
  
}
  ?>
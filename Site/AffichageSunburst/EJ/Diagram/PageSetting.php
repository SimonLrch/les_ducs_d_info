<?php
namespace EJ\Diagram;
class PageSetting {
    
  public function autoScrollBorder ($value) {
    $this -> autoScrollBorder = $value;
    return $this;
  }
  
  public function multiplePage ($value) {
    $this -> multiplePage = $value;
    return $this;
  }
  
  public function pageBackgroundColor ($value) {
    $this -> pageBackgroundColor = $value;
    return $this;
  }
  
  public function pageBorderColor ($value) {
    $this -> pageBorderColor = $value;
    return $this;
  }
  
  public function pageBorderWidth ($value) {
    $this -> pageBorderWidth = $value;
    return $this;
  }
  
  public function pageHeight ($value) {
    $this -> pageHeight = $value;
    return $this;
  }
  
  public function pageMargin ($value) {
    $this -> pageMargin = $value;
    return $this;
  }
  
  public function pageOrientation ($value) {
    $this -> pageOrientation = $value;
    return $this;
  }
  
  public function pageWidth ($value) {
    $this -> pageWidth = $value;
    return $this;
  }
  
  public function scrollableArea ($value) {
    $this -> scrollableArea = $value;
    return $this;
  }
  
  public function scrollLimit ($value) {
    $this -> scrollLimit = $value;
    return $this;
  }
  
  public function boundaryConstraints ($value) {
    $this -> boundaryConstraints = $value;
    return $this;
  }
  
  public function showPageBreak ($value) {
    $this -> showPageBreak = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\Grid;
class FilterSetting {
    
  public function enableCaseSensitivity ($value) {
    $this -> enableCaseSensitivity = $value;
    return $this;
  }
  
  public function enableInterDeterminateState ($value) {
    $this -> enableInterDeterminateState = $value;
    return $this;
  }
  
  public function filterBarMode ($value) {
    $this -> filterBarMode = $value;
    return $this;
  }
  
  public function filterType ($value) {
    $this -> filterType = $value;
    return $this;
  }
  
  public function immediateModeDelay ($value) {
    $this -> immediateModeDelay = $value;
    return $this;
  }
  
  public function maxFilterChoices ($value) {
    $this -> maxFilterChoices = $value;
    return $this;
  }
  
  public function showFilterBarStatus ($value) {
    $this -> showFilterBarStatus = $value;
    return $this;
  }
  
  public function showPredicate ($value) {
    $this -> showPredicate = $value;
    return $this;
  }
  
  public function filteredColumns ($value) {
    $this -> filteredColumns = $value;
    return $this;
  }
  
}
  ?>
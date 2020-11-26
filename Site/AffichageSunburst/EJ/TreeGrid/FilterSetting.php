<?php
namespace EJ\TreeGrid;
class FilterSetting {
    
  public function enableCaseSensitivity ($value) {
    $this -> enableCaseSensitivity = $value;
    return $this;
  }
  
  public function enableComplexBlankFilter ($value) {
    $this -> enableComplexBlankFilter = $value;
    return $this;
  }
  
  public function filterBarMode ($value) {
    $this -> filterBarMode = $value;
    return $this;
  }
  
  public function filterHierarchyMode ($value) {
    $this -> filterHierarchyMode = $value;
    return $this;
  }
  
  public function filterType ($value) {
    $this -> filterType = $value;
    return $this;
  }
  
  public function maxFilterChoices ($value) {
    $this -> maxFilterChoices = $value;
    return $this;
  }
  
  public function filteredColumns ($value) {
    $this -> filteredColumns = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\Autocomplete;
class MultiColumnSetting {
    
  public function enable ($value) {
    $this -> enable = $value;
    return $this;
  }
  
  public function showHeader ($value) {
    $this -> showHeader = $value;
    return $this;
  }
  
  public function stringFormat ($value) {
    $this -> stringFormat = $value;
    return $this;
  }
  
  public function searchColumnIndices ($value) {
    $this -> searchColumnIndices = $value;
    return $this;
  }
  
  public function columns ($value) {
    $this -> columns = $value;
    return $this;
  }
  
}
  ?>
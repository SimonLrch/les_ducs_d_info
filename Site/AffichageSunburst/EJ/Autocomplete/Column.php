<?php
namespace EJ\Autocomplete;
class Column {
    
  public function field ($value) {
    $this -> field = $value;
    return $this;
  }
  
  public function headerText ($value) {
    $this -> headerText = $value;
    return $this;
  }
  
  public function cssClass ($value) {
    $this -> cssClass = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function filterType ($value) {
    $this -> filterType = $value;
    return $this;
  }
  
  public function headerTextAlign ($value) {
    $this -> headerTextAlign = $value;
    return $this;
  }
  
  public function textAlign ($value) {
    $this -> textAlign = $value;
    return $this;
  }
  
}
  ?>
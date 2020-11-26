<?php
namespace EJ\Autocomplete;
class Field {
    
  public function groupBy ($value) {
    $this -> groupBy = $value;
    return $this;
  }
  
  public function htmlAttributes ($value) {
    $this -> htmlAttributes = $value;
    return $this;
  }
  
  public function key ($value) {
    $this -> key = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
}
  ?>
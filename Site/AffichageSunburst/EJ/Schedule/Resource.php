<?php
namespace EJ\Schedule;
class Resource {
    
  public function field ($value) {
    $this -> field = $value;
    return $this;
  }
  
  public function title ($value) {
    $this -> title = $value;
    return $this;
  }
  
  public function name ($value) {
    $this -> name = $value;
    return $this;
  }
  
  public function allowMultiple ($value) {
    $this -> allowMultiple = $value;
    return $this;
  }
  
  public function resourceSettings ($value) {
    $this -> resourceSettings = $value;
    return $this;
  }
  
}
  ?>
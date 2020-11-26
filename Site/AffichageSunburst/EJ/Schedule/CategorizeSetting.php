<?php
namespace EJ\Schedule;
class CategorizeSetting {
    
  public function allowMultiple ($value) {
    $this -> allowMultiple = $value;
    return $this;
  }
  
  public function enable ($value) {
    $this -> enable = $value;
    return $this;
  }
  
  public function dataSource ($value) {
    $this -> dataSource = $value;
    return $this;
  }
  
  public function id ($value) {
    $this -> id = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function fontColor ($value) {
    $this -> fontColor = $value;
    return $this;
  }
  
}
  ?>
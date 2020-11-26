<?php
namespace EJ\Schedule;
class TimeZoneCollection {
    
  public function dataSource ($value) {
    $this -> dataSource = $value;
    return $this;
  }
  
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function id ($value) {
    $this -> id = $value;
    return $this;
  }
  
  public function value ($value) {
    $this -> value = $value;
    return $this;
  }
  
}
  ?>
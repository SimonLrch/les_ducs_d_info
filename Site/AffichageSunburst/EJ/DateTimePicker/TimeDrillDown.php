<?php
namespace EJ\DateTimePicker;
class TimeDrillDown {
    
  public function enabled ($value) {
    $this -> enabled = $value;
    return $this;
  }
  
  public function interval ($value) {
    $this -> interval = $value;
    return $this;
  }
  
  public function showMeridian ($value) {
    $this -> showMeridian = $value;
    return $this;
  }
  
  public function autoClose ($value) {
    $this -> autoClose = $value;
    return $this;
  }
  
}
  ?>
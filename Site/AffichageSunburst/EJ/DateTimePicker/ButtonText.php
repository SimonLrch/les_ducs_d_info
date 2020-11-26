<?php
namespace EJ\DateTimePicker;
class ButtonText {
    
  public function done ($value) {
    $this -> done = $value;
    return $this;
  }
  
  public function timeNow ($value) {
    $this -> timeNow = $value;
    return $this;
  }
  
  public function timeTitle ($value) {
    $this -> timeTitle = $value;
    return $this;
  }
  
  public function today ($value) {
    $this -> today = $value;
    return $this;
  }
  
}
  ?>
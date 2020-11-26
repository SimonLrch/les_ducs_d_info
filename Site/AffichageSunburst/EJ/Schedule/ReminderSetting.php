<?php
namespace EJ\Schedule;
class ReminderSetting {
    
  public function enable ($value) {
    $this -> enable = $value;
    return $this;
  }
  
  public function alertBefore ($value) {
    $this -> alertBefore = $value;
    return $this;
  }
  
}
  ?>
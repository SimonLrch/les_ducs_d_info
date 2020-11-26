<?php
namespace EJ\Schedule;
class TooltipSetting {
    
  public function enable ($value) {
    $this -> enable = $value;
    return $this;
  }
  
  public function templateId ($value) {
    $this -> templateId = $value;
    return $this;
  }
  
}
  ?>
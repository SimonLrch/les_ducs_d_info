<?php
namespace EJ\Schedule;
class TimeScale {
    
  public function enable ($value) {
    $this -> enable = $value;
    return $this;
  }
  
  public function minorSlotCount ($value) {
    $this -> minorSlotCount = $value;
    return $this;
  }
  
  public function majorSlot ($value) {
    $this -> majorSlot = $value;
    return $this;
  }
  
  public function minorSlotTemplateId ($value) {
    $this -> minorSlotTemplateId = $value;
    return $this;
  }
  
  public function majorSlotTemplateId ($value) {
    $this -> majorSlotTemplateId = $value;
    return $this;
  }
  
}
  ?>
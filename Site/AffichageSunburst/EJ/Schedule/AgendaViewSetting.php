<?php
namespace EJ\Schedule;
class AgendaViewSetting {
    
  public function daysInAgenda ($value) {
    $this -> daysInAgenda = $value;
    return $this;
  }
  
  public function dateColumnTemplateId ($value) {
    $this -> dateColumnTemplateId = $value;
    return $this;
  }
  
  public function timeColumnTemplateId ($value) {
    $this -> timeColumnTemplateId = $value;
    return $this;
  }
  
}
  ?>
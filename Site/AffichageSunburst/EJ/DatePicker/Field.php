<?php
namespace EJ\DatePicker;
class Field {
    
  public function date ($value) {
    $this -> date = $value;
    return $this;
  }
  
  public function iconClass ($value) {
    $this -> iconClass = $value;
    return $this;
  }
  
  public function tooltip ($value) {
    $this -> tooltip = $value;
    return $this;
  }
  
  public function cssClass ($value) {
    $this -> cssClass = $value;
    return $this;
  }
  
}
  ?>
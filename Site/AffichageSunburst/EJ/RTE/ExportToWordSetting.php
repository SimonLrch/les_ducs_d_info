<?php
namespace EJ\RTE;
class ExportToWordSetting {
    
  public function url ($value) {
    $this -> url = $value;
    return $this;
  }
  
  public function fileName ($value) {
    $this -> fileName = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\CircularGauge;
class ExportSetting {
    
  public function filename ($value) {
    $this -> filename = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function action ($value) {
    $this -> action = $value;
    return $this;
  }
  
  public function mode ($value) {
    $this -> mode = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\Chart;
class ExportSetting {
    
  public function filename ($value) {
    $this -> filename = $value;
    return $this;
  }
  
  public function action ($value) {
    $this -> action = $value;
    return $this;
  }
  
  public function angle ($value) {
    $this -> angle = $value;
    return $this;
  }
  
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function orientation ($value) {
    $this -> orientation = $value;
    return $this;
  }
  
  public function mode ($value) {
    $this -> mode = $value;
    return $this;
  }
  
  public function multipleExport ($value) {
    $this -> multipleExport = $value;
    return $this;
  }
  
}
  ?>
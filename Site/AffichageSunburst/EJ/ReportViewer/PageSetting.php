<?php
namespace EJ\ReportViewer;
class PageSetting {
    
  public function orientation ($value) {
    $this -> orientation = $value;
    return $this;
  }
  
  public function paperSize ($value) {
    $this -> paperSize = $value;
    return $this;
  }
  
}
  ?>
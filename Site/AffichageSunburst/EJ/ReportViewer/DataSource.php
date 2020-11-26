<?php
namespace EJ\ReportViewer;
class DataSource {
    
  public function name ($value) {
    $this -> name = $value;
    return $this;
  }
  
  public function value ($value) {
    $this -> value = $value;
    return $this;
  }
  
}
  ?>
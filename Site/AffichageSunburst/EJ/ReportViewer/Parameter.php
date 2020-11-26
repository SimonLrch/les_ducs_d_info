<?php
namespace EJ\ReportViewer;
class Parameter {
    
  public function labels ($value) {
    $this -> labels = $value;
    return $this;
  }
  
  public function name ($value) {
    $this -> name = $value;
    return $this;
  }
  
  public function nullable ($value) {
    $this -> nullable = $value;
    return $this;
  }
  
  public function prompt ($value) {
    $this -> prompt = $value;
    return $this;
  }
  
  public function values ($value) {
    $this -> values = $value;
    return $this;
  }
  
}
  ?>
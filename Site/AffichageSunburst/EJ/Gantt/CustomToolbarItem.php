<?php
namespace EJ\Gantt;
class CustomToolbarItem {
    
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function templateID ($value) {
    $this -> templateID = $value;
    return $this;
  }
  
  public function tooltipText ($value) {
    $this -> tooltipText = $value;
    return $this;
  }
  
}
  ?>
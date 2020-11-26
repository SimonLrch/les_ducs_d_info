<?php
namespace EJ\Gantt;
class DragTooltip {
    
  public function showTooltip ($value) {
    $this -> showTooltip = $value;
    return $this;
  }
  
  public function tooltipItems ($value) {
    $this -> tooltipItems = $value;
    return $this;
  }
  
  public function tooltipTemplate ($value) {
    $this -> tooltipTemplate = $value;
    return $this;
  }
  
}
  ?>
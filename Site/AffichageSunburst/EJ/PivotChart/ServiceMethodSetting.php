<?php
namespace EJ\PivotChart;
class ServiceMethodSetting {
    
  public function drillDown ($value) {
    $this -> drillDown = $value;
    return $this;
  }
  
  public function exportPivotChart ($value) {
    $this -> exportPivotChart = $value;
    return $this;
  }
  
  public function initialize ($value) {
    $this -> initialize = $value;
    return $this;
  }
  
  public function paging ($value) {
    $this -> paging = $value;
    return $this;
  }
  
}
  ?>
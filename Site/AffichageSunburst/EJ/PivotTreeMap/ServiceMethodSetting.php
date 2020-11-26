<?php
namespace EJ\PivotTreeMap;
class ServiceMethodSetting {
    
  public function initialize ($value) {
    $this -> initialize = $value;
    return $this;
  }
  
  public function drillDown ($value) {
    $this -> drillDown = $value;
    return $this;
  }
  
}
  ?>
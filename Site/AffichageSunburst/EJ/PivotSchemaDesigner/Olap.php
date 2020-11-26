<?php
namespace EJ\PivotSchemaDesigner;
class Olap {
    
  public function showKPI ($value) {
    $this -> showKPI = $value;
    return $this;
  }
  
  public function showNamedSets ($value) {
    $this -> showNamedSets = $value;
    return $this;
  }
  
}
  ?>
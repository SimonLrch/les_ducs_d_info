<?php
namespace EJ\Map;
class ShapeSettingsColorMapping {
    
  public function rangeColorMapping ($value) {
    $this -> rangeColorMapping = $value;
    return $this;
  }
  
  public function equalColorMapping ($value) {
    $this -> equalColorMapping = $value;
    return $this;
  }
  
}
  ?>
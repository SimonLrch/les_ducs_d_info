<?php
namespace EJ\HeatMap;
class ColumnStyle {
    
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
  public function textAlign ($value) {
    $this -> textAlign = $value;
    return $this;
  }
  
  public function headerTemplateID ($value) {
    $this -> headerTemplateID = $value;
    return $this;
  }
  
  public function templateID ($value) {
    $this -> templateID = $value;
    return $this;
  }
  
}
  ?>
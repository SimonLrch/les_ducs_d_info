<?php
namespace EJ\Chart;
class ConnectorLine {
    
  public function type ($value) {
    $this -> type = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function height ($value) {
    $this -> height = $value;
    return $this;
  }
  
}
  ?>
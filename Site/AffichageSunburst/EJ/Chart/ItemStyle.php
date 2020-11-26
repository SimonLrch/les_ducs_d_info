<?php
namespace EJ\Chart;
class ItemStyle {
    
  public function height ($value) {
    $this -> height = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
  public function border ($value) {
    $this -> border = $value;
    return $this;
  }
  
}
  ?>
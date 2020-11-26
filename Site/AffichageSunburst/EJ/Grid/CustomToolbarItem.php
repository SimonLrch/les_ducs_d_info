<?php
namespace EJ\Grid;
class CustomToolbarItem {
    
  public function templateID ($value) {
    $this -> templateID = $value;
    return $this;
  }
  
  public function tooltip ($value) {
    $this -> tooltip = $value;
    return $this;
  }
  
}
  ?>
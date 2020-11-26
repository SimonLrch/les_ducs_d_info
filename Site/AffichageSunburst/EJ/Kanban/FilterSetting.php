<?php
namespace EJ\Kanban;
class FilterSetting {
    
  public function text ($value) {
    $this -> text = $value;
    return $this;
  }
  
  public function query ($value) {
    $this -> query = $value;
    return $this;
  }
  
  public function description ($value) {
    $this -> description = $value;
    return $this;
  }
  
}
  ?>
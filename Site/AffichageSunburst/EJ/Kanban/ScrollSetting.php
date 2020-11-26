<?php
namespace EJ\Kanban;
class ScrollSetting {
    
  public function height ($value) {
    $this -> height = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
  public function allowFreezeSwimlane ($value) {
    $this -> allowFreezeSwimlane = $value;
    return $this;
  }
  
}
  ?>
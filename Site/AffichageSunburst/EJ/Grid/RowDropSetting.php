<?php
namespace EJ\Grid;
class RowDropSetting {
    
  public function dropTargetID ($value) {
    $this -> dropTargetID = $value;
    return $this;
  }
  
  public function dragMapper ($value) {
    $this -> dragMapper = $value;
    return $this;
  }
  
  public function dropMapper ($value) {
    $this -> dropMapper = $value;
    return $this;
  }
  
  public function dragBehavior ($value) {
    $this -> dragBehavior = $value;
    return $this;
  }
  
}
  ?>
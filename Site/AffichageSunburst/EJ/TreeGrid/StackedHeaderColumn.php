<?php
namespace EJ\TreeGrid;
class StackedHeaderColumn {
    
  public function column ($value) {
    $this -> column = $value;
    return $this;
  }
  
  public function cssClass ($value) {
    $this -> cssClass = $value;
    return $this;
  }
  
  public function headerText ($value) {
    $this -> headerText = $value;
    return $this;
  }
  
  public function textAlign ($value) {
    $this -> textAlign = $value;
    return $this;
  }
  
  public function tooltip ($value) {
    $this -> tooltip = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\Kanban;
class StackedHeaderColumn {
    
  public function headerText ($value) {
    $this -> headerText = $value;
    return $this;
  }
  
  public function column ($value) {
    $this -> column = $value;
    return $this;
  }
  
}
  ?>
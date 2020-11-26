<?php
namespace EJ\Kanban;
class SwimlaneSetting {
    
  public function showCount ($value) {
    $this -> showCount = $value;
    return $this;
  }
  
  public function allowDragAndDrop ($value) {
    $this -> allowDragAndDrop = $value;
    return $this;
  }
  
  public function showEmptySwimlane ($value) {
    $this -> showEmptySwimlane = $value;
    return $this;
  }
  
  public function headers ($value) {
    $this -> headers = $value;
    return $this;
  }
  
  public function unassignedGroup ($value) {
    $this -> unassignedGroup = $value;
    return $this;
  }
  
}
  ?>
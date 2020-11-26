<?php
namespace EJ\Kanban;
class Column {
    
  public function headerText ($value) {
    $this -> headerText = $value;
    return $this;
  }
  
  public function key ($value) {
    $this -> key = $value;
    return $this;
  }
  
  public function allowDrop ($value) {
    $this -> allowDrop = $value;
    return $this;
  }
  
  public function allowDrag ($value) {
    $this -> allowDrag = $value;
    return $this;
  }
  
  public function isCollapsed ($value) {
    $this -> isCollapsed = $value;
    return $this;
  }
  
  public function headerTemplate ($value) {
    $this -> headerTemplate = $value;
    return $this;
  }
  
  public function width ($value) {
    $this -> width = $value;
    return $this;
  }
  
  public function visible ($value) {
    $this -> visible = $value;
    return $this;
  }
  
  public function showAddButton ($value) {
    $this -> showAddButton = $value;
    return $this;
  }
  
  public function totalCount ($value) {
    $this -> totalCount = $value;
    return $this;
  }
  
  public function constraints ($value) {
    $this -> constraints = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\Kanban;
class Field {
    
  public function primaryKey ($value) {
    $this -> primaryKey = $value;
    return $this;
  }
  
  public function swimlaneKey ($value) {
    $this -> swimlaneKey = $value;
    return $this;
  }
  
  public function priority ($value) {
    $this -> priority = $value;
    return $this;
  }
  
  public function content ($value) {
    $this -> content = $value;
    return $this;
  }
  
  public function tag ($value) {
    $this -> tag = $value;
    return $this;
  }
  
  public function title ($value) {
    $this -> title = $value;
    return $this;
  }
  
  public function color ($value) {
    $this -> color = $value;
    return $this;
  }
  
  public function imageUrl ($value) {
    $this -> imageUrl = $value;
    return $this;
  }
  
  public function collapsibleCards ($value) {
    $this -> collapsibleCards = $value;
    return $this;
  }
  
}
  ?>
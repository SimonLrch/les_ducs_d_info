<?php
namespace EJ\Schedule;
class Group {
    
  public function resources ($value) {
    $this -> resources = $value;
    return $this;
  }
  
  public function allowGroupEditing ($value) {
    $this -> allowGroupEditing = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\Kanban;
class EditItem {
    
  public function field ($value) {
    $this -> field = $value;
    return $this;
  }
  
  public function editType ($value) {
    $this -> editType = $value;
    return $this;
  }
  
  public function validationRules ($value) {
    $this -> validationRules = $value;
    return $this;
  }
  
  public function editParams ($value) {
    $this -> editParams = $value;
    return $this;
  }
  
  public function defaultValue ($value) {
    $this -> defaultValue = $value;
    return $this;
  }
  
}
  ?>
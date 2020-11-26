<?php
namespace EJ\Kanban;
class EditSetting {
    
  public function allowEditing ($value) {
    $this -> allowEditing = $value;
    return $this;
  }
  
  public function allowAdding ($value) {
    $this -> allowAdding = $value;
    return $this;
  }
  
  public function dialogTemplate ($value) {
    $this -> dialogTemplate = $value;
    return $this;
  }
  
  public function editMode ($value) {
    $this -> editMode = $value;
    return $this;
  }
  
  public function externalFormTemplate ($value) {
    $this -> externalFormTemplate = $value;
    return $this;
  }
  
  public function formPosition ($value) {
    $this -> formPosition = $value;
    return $this;
  }
  
  public function editItems ($value) {
    $this -> editItems = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\Gantt;
class EditDialogField {
    
  public function field ($value) {
    $this -> field = $value;
    return $this;
  }
  
  public function editType ($value) {
    $this -> editType = $value;
    return $this;
  }
  
  public function displayInGeneralTab ($value) {
    $this -> displayInGeneralTab = $value;
    return $this;
  }
  
}
  ?>
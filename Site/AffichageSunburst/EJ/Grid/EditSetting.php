<?php
namespace EJ\Grid;
class EditSetting {
    
  public function allowAdding ($value) {
    $this -> allowAdding = $value;
    return $this;
  }
  
  public function allowDeleting ($value) {
    $this -> allowDeleting = $value;
    return $this;
  }
  
  public function allowEditing ($value) {
    $this -> allowEditing = $value;
    return $this;
  }
  
  public function allowEditOnDblClick ($value) {
    $this -> allowEditOnDblClick = $value;
    return $this;
  }
  
  public function dialogEditorTemplateID ($value) {
    $this -> dialogEditorTemplateID = $value;
    return $this;
  }
  
  public function editMode ($value) {
    $this -> editMode = $value;
    return $this;
  }
  
  public function externalFormTemplateID ($value) {
    $this -> externalFormTemplateID = $value;
    return $this;
  }
  
  public function formPosition ($value) {
    $this -> formPosition = $value;
    return $this;
  }
  
  public function inlineFormTemplateID ($value) {
    $this -> inlineFormTemplateID = $value;
    return $this;
  }
  
  public function rowPosition ($value) {
    $this -> rowPosition = $value;
    return $this;
  }
  
  public function showConfirmDialog ($value) {
    $this -> showConfirmDialog = $value;
    return $this;
  }
  
  public function showDeleteConfirmDialog ($value) {
    $this -> showDeleteConfirmDialog = $value;
    return $this;
  }
  
  public function titleColumn ($value) {
    $this -> titleColumn = $value;
    return $this;
  }
  
  public function showAddNewRow ($value) {
    $this -> showAddNewRow = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\Diagram;
class HistoryManager {
    
  public function canPop ($value) {
    $this -> canPop = $value;
    return $this;
  }
  
  public function closeGroupAction ($value) {
    $this -> closeGroupAction = $value;
    return $this;
  }
  
  public function pop ($value) {
    $this -> pop = $value;
    return $this;
  }
  
  public function push ($value) {
    $this -> push = $value;
    return $this;
  }
  
  public function redo ($value) {
    $this -> redo = $value;
    return $this;
  }
  
  public function redoStack ($value) {
    $this -> redoStack = $value;
    return $this;
  }
  
  public function stackLimit ($value) {
    $this -> stackLimit = $value;
    return $this;
  }
  
  public function startGroupAction ($value) {
    $this -> startGroupAction = $value;
    return $this;
  }
  
  public function undo ($value) {
    $this -> undo = $value;
    return $this;
  }
  
  public function undoStack ($value) {
    $this -> undoStack = $value;
    return $this;
  }
  
}
  ?>
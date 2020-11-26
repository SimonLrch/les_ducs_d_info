<?php
namespace EJ\FileExplorer;
class GridSetting {
    
  public function allowResizing ($value) {
    $this -> allowResizing = $value;
    return $this;
  }
  
  public function allowSorting ($value) {
    $this -> allowSorting = $value;
    return $this;
  }
  
  public function columns ($value) {
    $this -> columns = $value;
    return $this;
  }
  
}
  ?>
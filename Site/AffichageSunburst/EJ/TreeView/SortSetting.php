<?php
namespace EJ\TreeView;
class SortSetting {
    
  public function allowSorting ($value) {
    $this -> allowSorting = $value;
    return $this;
  }
  
  public function sortOrder ($value) {
    $this -> sortOrder = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ\FileExplorer;
class FilterSetting {
    
  public function allowSearchOnTyping ($value) {
    $this -> allowSearchOnTyping = $value;
    return $this;
  }
  
  public function caseSensitiveSearch ($value) {
    $this -> caseSensitiveSearch = $value;
    return $this;
  }
  
  public function filterType ($value) {
    $this -> filterType = $value;
    return $this;
  }
  
}
  ?>
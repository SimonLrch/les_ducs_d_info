<?php
namespace EJ\Uploadbox;
class CustomFileDetail {
    
  public function action ($value) {
    $this -> action = $value;
    return $this;
  }
  
  public function name ($value) {
    $this -> name = $value;
    return $this;
  }
  
  public function size ($value) {
    $this -> size = $value;
    return $this;
  }
  
  public function status ($value) {
    $this -> status = $value;
    return $this;
  }
  
  public function title ($value) {
    $this -> title = $value;
    return $this;
  }
  
}
  ?>
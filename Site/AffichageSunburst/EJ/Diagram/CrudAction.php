<?php
namespace EJ\Diagram;
class CrudAction {
    
  public function create ($value) {
    $this -> create = $value;
    return $this;
  }
  
  public function update ($value) {
    $this -> update = $value;
    return $this;
  }
  
  public function destroy ($value) {
    $this -> destroy = $value;
    return $this;
  }
  
  public function read ($value) {
    $this -> read = $value;
    return $this;
  }
  
}
  ?>
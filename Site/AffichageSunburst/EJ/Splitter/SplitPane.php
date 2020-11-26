<?php
namespace EJ\Splitter;
Class SplitPane {
    
  public function id ($value) {
    $this -> id = $value;
    return $this;
  }
  
  public function  paneSize ($value) {
    $this ->  paneSize = $value;
    return $this;
  }
  
  public function minSize ($value) {
    $this -> minSize = $value;
    return $this;
  }
  
  public function  maxSize ($value) {
    $this ->  maxSize = $value;
    return $this;
  }
  
  public function  collapsible ($value) {
    $this ->  collapsible = $value;
    return $this;
  }
  
  public function  expandable ($value) {
    $this ->  expandable = $value;
    return $this;
  }
  
  public function  resizable ($value) {
    $this ->  resizable = $value;
    return $this;
  }
  
    
  public function getObject() {
    return  $this ;
  }
  
  public function templateStart() {
    ob_start();
    return $this;
  }

  protected function content($value) {
    $this -> content = $value;
    return $this;
  }

  public function templateEnd() {
    $this -> content(ob_get_clean());
    return $this;
  }
  
}
  ?>
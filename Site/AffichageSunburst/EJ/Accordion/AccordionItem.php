<?php
namespace EJ\Accordion;
Class AccordionItem {
    
  public function id ($value) {
    $this -> id = $value;
    return $this;
  }
  
  public function  text ($value) {
    $this ->  text = $value;
    return $this;
  }
  
  public function  ajaxURL ($value) {
    $this ->  ajaxURL = $value;
    return $this;
  }
  
  public function  headerIconClass ($value) {
    $this ->  headerIconClass = $value;
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
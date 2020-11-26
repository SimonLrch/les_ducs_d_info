<?php
namespace EJ\TreeView;
class TreeViewItem extends \EJ\Serialize {
    
  public function id ($value) {
    $this -> id = $value;
    return $this;
  }
  
  public function  text ($value) {
    $this ->  text = $value;
    return $this;
  }
  
  public function  url ($value) {
    $this ->  url = $value;
    return $this;
  }
  
  public function  spriteCssClass ($value) {
    $this ->  spriteCssClass = $value;
    return $this;
  }
  
  public function  imageUrl ($value) {
    $this ->  imageUrl = $value;
    return $this;
  }
  
  public function  htmlAttribute ($value) {
    $this ->  htmlAttribute = $value;
    return $this;
  }
  
  public function  linkAttribute ($value) {
    $this ->  linkAttribute = $value;
    return $this;
  }
  
  public function  imageAttribute ($value) {
    $this ->  imageAttribute = $value;
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
  
  public function addItem () {
    $this->add('item',func_get_args());
    return $this;
  }
  
}
  ?>
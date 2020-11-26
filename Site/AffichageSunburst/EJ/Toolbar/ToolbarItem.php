<?php
namespace EJ\Toolbar;
class ToolbarItem extends \EJ\Serialize {
    
  public function id ($value) {
    $this -> id = $value;
    return $this;
  }
  
  public function  text ($value) {
    $this ->  text = $value;
    return $this;
  }
  
  public function  imageUrl ($value) {
    $this ->  imageUrl = $value;
    return $this;
  }
  
  public function  tooltipText ($value) {
    $this ->  tooltipText = $value;
    return $this;
  }
  
  public function  imageAttributes ($value) {
    $this ->  imageAttributes = $value;
    return $this;
  }
  
  public function  SpriteCssClass ($value) {
    $this ->  SpriteCssClass = $value;
    return $this;
  }
  
  public function  HtmlAttributes ($value) {
    $this ->  HtmlAttributes = $value;
    return $this;
  }
  
  public function  Group ($value) {
    $this ->  Group = $value;
    return $this;
  }
  
  public function  contentTemplate ($value) {
    $this ->  contentTemplate = $value;
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
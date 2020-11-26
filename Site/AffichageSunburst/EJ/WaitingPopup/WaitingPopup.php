<?php
namespace EJ;
class WaitingPopup extends \EJ\Widget {
    
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function htmlAttributes($value) {
    $this->model["htmlAttributes"] = $value;
    return $this;
  }
  
  public function showImage($value) {
    $this->model["showImage"] = $value;
    return $this;
  }
  
  public function showOnInit($value) {
    $this->model["showOnInit"] = $value;
    return $this;
  }
  
  public function target($value) {
    $this->model["target"] = $value;
    return $this;
  }
  
  public function appendTo($value) {
    $this->model["appendTo"] = $value;
    return $this;
  }
  
  public function template($value) {
    $this->model["template"] = $value;
    return $this;
  }
  
  public function text($value) {
    $this->model["text"] = $value;
    return $this;
  }
  
  public function create($value) {
    $this->model["create"] = $value;
    return $this;
  }
  
  public function destroy($value) {
    $this->model["destroy"] = $value;
    return $this;
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
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejWaitingPopup";
  }
  
}
  ?>
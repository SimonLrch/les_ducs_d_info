<?php
namespace EJ;
class Button extends \EJ\Widget {
    
  public function contentType($value) {
    $this->model["contentType"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function enabled($value) {
    $this->model["enabled"] = $value;
    return $this;
  }
  
  public function enableRTL($value) {
    $this->model["enableRTL"] = $value;
    return $this;
  }
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function htmlAttributes($value) {
    $this->model["htmlAttributes"] = $value;
    return $this;
  }
  
  public function imagePosition($value) {
    $this->model["imagePosition"] = $value;
    return $this;
  }
  
  public function prefixIcon($value) {
    $this->model["prefixIcon"] = $value;
    return $this;
  }
  
  public function repeatButton($value) {
    $this->model["repeatButton"] = $value;
    return $this;
  }
  
  public function showRoundedCorner($value) {
    $this->model["showRoundedCorner"] = $value;
    return $this;
  }
  
  public function size($value) {
    $this->model["size"] = $value;
    return $this;
  }
  
  public function suffixIcon($value) {
    $this->model["suffixIcon"] = $value;
    return $this;
  }
  
  public function text($value) {
    $this->model["text"] = $value;
    return $this;
  }
  
  public function timeInterval($value) {
    $this->model["timeInterval"] = $value;
    return $this;
  }
  
  public function type($value) {
    $this->model["type"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function click($value) {
    $this->model["click"] = $value;
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
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('button') ;
  }
  
  protected function PluginName() {
    return "ejButton";
  }
  
    
}
  ?>
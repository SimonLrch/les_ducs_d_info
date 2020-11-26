<?php
namespace EJ;
class ToggleButton extends \EJ\Widget {
    
  public function activePrefixIcon($value) {
    $this->model["activePrefixIcon"] = $value;
    return $this;
  }
  
  public function activeSuffixIcon($value) {
    $this->model["activeSuffixIcon"] = $value;
    return $this;
  }
  
  public function activeText($value) {
    $this->model["activeText"] = $value;
    return $this;
  }
  
  public function contentType($value) {
    $this->model["contentType"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function defaultPrefixIcon($value) {
    $this->model["defaultPrefixIcon"] = $value;
    return $this;
  }
  
  public function defaultSuffixIcon($value) {
    $this->model["defaultSuffixIcon"] = $value;
    return $this;
  }
  
  public function defaultText($value) {
    $this->model["defaultText"] = $value;
    return $this;
  }
  
  public function enabled($value) {
    $this->model["enabled"] = $value;
    return $this;
  }
  
  public function enablePersistence($value) {
    $this->model["enablePersistence"] = $value;
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
  
  public function preventToggle($value) {
    $this->model["preventToggle"] = $value;
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
  
  public function toggleState($value) {
    $this->model["toggleState"] = $value;
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
  
  public function change($value) {
    $this->model["change"] = $value;
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
    $tag = new \EJ\HtmlTag('input') ;
    return $this->setAttribute($tag, "type", "checkbox");
}
  protected function PluginName() {
    return "ejToggleButton";
  }
  
    
}
  ?>
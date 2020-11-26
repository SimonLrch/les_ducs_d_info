<?php
namespace EJ;
class Signature extends \EJ\Widget {
    
  public function backgroundColor($value) {
    $this->model["backgroundColor"] = $value;
    return $this;
  }
  
  public function backgroundImage($value) {
    $this->model["backgroundImage"] = $value;
    return $this;
  }
  
  public function enabled($value) {
    $this->model["enabled"] = $value;
    return $this;
  }
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function saveImageFormat($value) {
    $this->model["saveImageFormat"] = $value;
    return $this;
  }
  
  public function saveWithBackground($value) {
    $this->model["saveWithBackground"] = $value;
    return $this;
  }
  
  public function showRoundedCorner($value) {
    $this->model["showRoundedCorner"] = $value;
    return $this;
  }
  
  public function strokeColor($value) {
    $this->model["strokeColor"] = $value;
    return $this;
  }
  
  public function strokeWidth($value) {
    $this->model["strokeWidth"] = $value;
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
  
  public function mouseDown($value) {
    $this->model["mouseDown"] = $value;
    return $this;
  }
  
  public function mouseMove($value) {
    $this->model["mouseMove"] = $value;
    return $this;
  }
  
  public function mouseUp($value) {
    $this->model["mouseUp"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejSignature";
  }
  
    
}
  ?>
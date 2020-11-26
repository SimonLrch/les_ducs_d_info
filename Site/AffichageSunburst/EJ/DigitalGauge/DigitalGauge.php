<?php
namespace EJ;
class DigitalGauge extends \EJ\Widget {
    
  public function exportSettings($value) {
    $this->model["exportSettings"] = $value;
    return $this;
  }
  
  public function frame($value) {
    $this->model["frame"] = $value;
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
  
  public function enableResize($value) {
    $this->model["enableResize"] = $value;
    return $this;
  }
  
  public function items($value) {
    $this->model["items"] = $value;
    return $this;
  }
  
  public function matrixSegmentData($value) {
    $this->model["matrixSegmentData"] = $value;
    return $this;
  }
  
  public function segmentData($value) {
    $this->model["segmentData"] = $value;
    return $this;
  }
  
  public function themes($value) {
    $this->model["themes"] = $value;
    return $this;
  }
  
  public function value($value) {
    $this->model["value"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function init($value) {
    $this->model["init"] = $value;
    return $this;
  }
  
  public function itemRendering($value) {
    $this->model["itemRendering"] = $value;
    return $this;
  }
  
  public function load($value) {
    $this->model["load"] = $value;
    return $this;
  }
  
  public function renderComplete($value) {
    $this->model["renderComplete"] = $value;
    return $this;
  }
  
  public function Click($value) {
    $this->model["Click"] = $value;
    return $this;
  }
  
  public function doubleClick($value) {
    $this->model["doubleClick"] = $value;
    return $this;
  }
  
  public function rightClick($value) {
    $this->model["rightClick"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejDigitalGauge";
  }
  
    
}
  ?>
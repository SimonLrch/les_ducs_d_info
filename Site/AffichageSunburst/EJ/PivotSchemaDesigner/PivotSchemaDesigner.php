<?php
namespace EJ;
class PivotSchemaDesigner extends \EJ\Widget {
    
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function customObject($value) {
    $this->model["customObject"] = $value;
    return $this;
  }
  
  public function enableWrapper($value) {
    $this->model["enableWrapper"] = $value;
    return $this;
  }
  
  public function enableRTL($value) {
    $this->model["enableRTL"] = $value;
    return $this;
  }
  
  public function olap($value) {
    $this->model["olap"] = $value;
    return $this;
  }
  
  public function enableDragDrop($value) {
    $this->model["enableDragDrop"] = $value;
    return $this;
  }
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function pivotControl($value) {
    $this->model["pivotControl"] = $value;
    return $this;
  }
  
  public function serviceMethods($value) {
    $this->model["serviceMethods"] = $value;
    return $this;
  }
  
  public function url($value) {
    $this->model["url"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function layout($value) {
    $this->model["layout"] = $value;
    return $this;
  }
  
  public function load($value) {
    $this->model["load"] = $value;
    return $this;
  }
  
  public function afterServiceInvoke($value) {
    $this->model["afterServiceInvoke"] = $value;
    return $this;
  }
  
  public function beforeServiceInvoke($value) {
    $this->model["beforeServiceInvoke"] = $value;
    return $this;
  }
  
  public function dragMove($value) {
    $this->model["dragMove"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejPivotSchemaDesigner";
  }
  
    
}
  ?>
<?php
namespace EJ;
class PivotTreeMap extends \EJ\Widget {
    
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function dataSource($value) {
    $this->model["dataSource"] = $value;
    return $this;
  }
  
  public function customObject($value) {
    $this->model["customObject"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function operationalMode($value) {
    $this->model["operationalMode"] = $value;
    return $this;
  }
  
  public function serviceMethodSettings($value) {
    $this->model["serviceMethodSettings"] = $value;
    return $this;
  }
  
  public function url($value) {
    $this->model["url"] = $value;
    return $this;
  }
  
  public function enableXHRCredentials($value) {
    $this->model["enableXHRCredentials"] = $value;
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
  
  public function load($value) {
    $this->model["load"] = $value;
    return $this;
  }
  
  public function drillSuccess($value) {
    $this->model["drillSuccess"] = $value;
    return $this;
  }
  
  public function renderComplete($value) {
    $this->model["renderComplete"] = $value;
    return $this;
  }
  
  public function renderFailure($value) {
    $this->model["renderFailure"] = $value;
    return $this;
  }
  
  public function renderSuccess($value) {
    $this->model["renderSuccess"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejPivotTreeMap";
  }
  
    
}
  ?>
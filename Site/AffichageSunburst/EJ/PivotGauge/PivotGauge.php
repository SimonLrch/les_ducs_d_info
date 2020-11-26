<?php
namespace EJ;
class PivotGauge extends \EJ\Widget {
    
  public function columnsCount($value) {
    $this->model["columnsCount"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function customObject($value) {
    $this->model["customObject"] = $value;
    return $this;
  }
  
  public function dataSource($value) {
    $this->model["dataSource"] = $value;
    return $this;
  }
  
  public function enableAnimation($value) {
    $this->model["enableAnimation"] = $value;
    return $this;
  }
  
  public function enableTooltip($value) {
    $this->model["enableTooltip"] = $value;
    return $this;
  }
  
  public function enableRTL($value) {
    $this->model["enableRTL"] = $value;
    return $this;
  }
  
  public function frame($value) {
    $this->model["frame"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function labelFormatSettings($value) {
    $this->model["labelFormatSettings"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function rowsCount($value) {
    $this->model["rowsCount"] = $value;
    return $this;
  }
  
  public function scales($value) {
    $this->model["scales"] = $value;
    return $this;
  }
  
  public function serviceMethodSettings($value) {
    $this->model["serviceMethodSettings"] = $value;
    return $this;
  }
  
  public function showHeaderLabel($value) {
    $this->model["showHeaderLabel"] = $value;
    return $this;
  }
  
  public function url($value) {
    $this->model["url"] = $value;
    return $this;
  }
  
  public function analysisMode($value) {
    $this->model["analysisMode"] = $value;
    return $this;
  }
  
  public function operationalMode($value) {
    $this->model["operationalMode"] = $value;
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
  
  public function beforePivotEnginePopulate($value) {
    $this->model["beforePivotEnginePopulate"] = $value;
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
    return "ejPivotGauge";
  }
  
    
}
  ?>
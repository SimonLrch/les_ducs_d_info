<?php
namespace EJ;
class PercentageTextbox extends \EJ\Widget {
    
  public function currencySymbol($value) {
    $this->model["currencySymbol"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function decimalPlaces($value) {
    $this->model["decimalPlaces"] = $value;
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
  
  public function enableStrictMode($value) {
    $this->model["enableStrictMode"] = $value;
    return $this;
  }
  
  public function groupSize($value) {
    $this->model["groupSize"] = $value;
    return $this;
  }
  
  public function groupSeparator($value) {
    $this->model["groupSeparator"] = $value;
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
  
  public function incrementStep($value) {
    $this->model["incrementStep"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function maxValue($value) {
    $this->model["maxValue"] = $value;
    return $this;
  }
  
  public function minValue($value) {
    $this->model["minValue"] = $value;
    return $this;
  }
  
  public function name($value) {
    $this->model["name"] = $value;
    return $this;
  }
  
  public function negativePattern($value) {
    $this->model["negativePattern"] = $value;
    return $this;
  }
  
  public function positivePattern($value) {
    $this->model["positivePattern"] = $value;
    return $this;
  }
  
  public function readOnly($value) {
    $this->model["readOnly"] = $value;
    return $this;
  }
  
  public function showRoundedCorner($value) {
    $this->model["showRoundedCorner"] = $value;
    return $this;
  }
  
  public function showSpinButton($value) {
    $this->model["showSpinButton"] = $value;
    return $this;
  }
  
  public function validateOnType($value) {
    $this->model["validateOnType"] = $value;
    return $this;
  }
  
  public function validationMessage($value) {
    $this->model["validationMessage"] = $value;
    return $this;
  }
  
  public function validationRules($value) {
    $this->model["validationRules"] = $value;
    return $this;
  }
  
  public function value($value) {
    $this->model["value"] = $value;
    return $this;
  }
  
  public function watermarkText($value) {
    $this->model["watermarkText"] = $value;
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
  
  public function create($value) {
    $this->model["create"] = $value;
    return $this;
  }
  
  public function destroy($value) {
    $this->model["destroy"] = $value;
    return $this;
  }
  
  public function focusIn($value) {
    $this->model["focusIn"] = $value;
    return $this;
  }
  
  public function focusOut($value) {
    $this->model["focusOut"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('input') ;
  }
  
  protected function PluginName() {
    return "ejPercentageTextbox";
  }
  
    
}
  ?>
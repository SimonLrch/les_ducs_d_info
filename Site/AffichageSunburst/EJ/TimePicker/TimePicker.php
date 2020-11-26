<?php
namespace EJ;
class TimePicker extends \EJ\Widget {
    
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function disableTimeRanges($value) {
    $this->model["disableTimeRanges"] = $value;
    return $this;
  }
  
  public function enableAnimation($value) {
    $this->model["enableAnimation"] = $value;
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
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function hourInterval($value) {
    $this->model["hourInterval"] = $value;
    return $this;
  }
  
  public function htmlAttributes($value) {
    $this->model["htmlAttributes"] = $value;
    return $this;
  }
  
  public function interval($value) {
    $this->model["interval"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function maxTime($value) {
    $this->model["maxTime"] = $value;
    return $this;
  }
  
  public function minTime($value) {
    $this->model["minTime"] = $value;
    return $this;
  }
  
  public function minutesInterval($value) {
    $this->model["minutesInterval"] = $value;
    return $this;
  }
  
  public function popupHeight($value) {
    $this->model["popupHeight"] = $value;
    return $this;
  }
  
  public function popupWidth($value) {
    $this->model["popupWidth"] = $value;
    return $this;
  }
  
  public function readOnly($value) {
    $this->model["readOnly"] = $value;
    return $this;
  }
  
  public function secondsInterval($value) {
    $this->model["secondsInterval"] = $value;
    return $this;
  }
  
  public function showPopupButton($value) {
    $this->model["showPopupButton"] = $value;
    return $this;
  }
  
  public function showRoundedCorner($value) {
    $this->model["showRoundedCorner"] = $value;
    return $this;
  }
  
  public function timeFormat($value) {
    $this->model["timeFormat"] = $value;
    return $this;
  }
  
  public function validationMessages($value) {
    $this->model["validationMessages"] = $value;
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
  
  public function beforeChange($value) {
    $this->model["beforeChange"] = $value;
    return $this;
  }
  
  public function beforeOpen($value) {
    $this->model["beforeOpen"] = $value;
    return $this;
  }
  
  public function change($value) {
    $this->model["change"] = $value;
    return $this;
  }
  
  public function close($value) {
    $this->model["close"] = $value;
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
  
  public function open($value) {
    $this->model["open"] = $value;
    return $this;
  }
  
  public function select($value) {
    $this->model["select"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('input') ;
  }
  
  protected function PluginName() {
    return "ejTimePicker";
  }
  
    
}
  ?>
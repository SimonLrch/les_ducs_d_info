<?php
namespace EJ;
class DateTimePicker extends \EJ\Widget {
    
  public function allowEdit($value) {
    $this->model["allowEdit"] = $value;
    return $this;
  }
  
  public function buttonText($value) {
    $this->model["buttonText"] = $value;
    return $this;
  }
  
  public function blackoutDates($value) {
    $this->model["blackoutDates"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function dateTimeFormat($value) {
    $this->model["dateTimeFormat"] = $value;
    return $this;
  }
  
  public function dayHeaderFormat($value) {
    $this->model["dayHeaderFormat"] = $value;
    return $this;
  }
  
  public function depthLevel($value) {
    $this->model["depthLevel"] = $value;
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
  
  public function headerFormat($value) {
    $this->model["headerFormat"] = $value;
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
  
  public function interval($value) {
    $this->model["interval"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function maxDateTime($value) {
    $this->model["maxDateTime"] = $value;
    return $this;
  }
  
  public function minDateTime($value) {
    $this->model["minDateTime"] = $value;
    return $this;
  }
  
  public function popupPosition($value) {
    $this->model["popupPosition"] = $value;
    return $this;
  }
  
  public function readOnly($value) {
    $this->model["readOnly"] = $value;
    return $this;
  }
  
  public function showOtherMonths($value) {
    $this->model["showOtherMonths"] = $value;
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
  
  public function specialDates($value) {
    $this->model["specialDates"] = $value;
    return $this;
  }
  
  public function startDay($value) {
    $this->model["startDay"] = $value;
    return $this;
  }
  
  public function startLevel($value) {
    $this->model["startLevel"] = $value;
    return $this;
  }
  
  public function stepMonths($value) {
    $this->model["stepMonths"] = $value;
    return $this;
  }
  
  public function timeDisplayFormat($value) {
    $this->model["timeDisplayFormat"] = $value;
    return $this;
  }
  
  public function timeDrillDown($value) {
    $this->model["timeDrillDown"] = $value;
    return $this;
  }
  
  public function timePopupWidth($value) {
    $this->model["timePopupWidth"] = $value;
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
  
  public function beforeClose($value) {
    $this->model["beforeClose"] = $value;
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
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('input') ;
  }
  
  protected function PluginName() {
    return "ejDateTimePicker";
  }
  
    
}
  ?>
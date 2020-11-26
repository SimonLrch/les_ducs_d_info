<?php
namespace EJ;
class MaskEdit extends \EJ\Widget {
    
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function customCharacter($value) {
    $this->model["customCharacter"] = $value;
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
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function hidePromptOnLeave($value) {
    $this->model["hidePromptOnLeave"] = $value;
    return $this;
  }
  
  public function htmlAttributes($value) {
    $this->model["htmlAttributes"] = $value;
    return $this;
  }
  
  public function inputMode($value) {
    $this->model["inputMode"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function maskFormat($value) {
    $this->model["maskFormat"] = $value;
    return $this;
  }
  
  public function name($value) {
    $this->model["name"] = $value;
    return $this;
  }
  
  public function readOnly($value) {
    $this->model["readOnly"] = $value;
    return $this;
  }
  
  public function showError($value) {
    $this->model["showError"] = $value;
    return $this;
  }
  
  public function showPromptChar($value) {
    $this->model["showPromptChar"] = $value;
    return $this;
  }
  
  public function showRoundedCorner($value) {
    $this->model["showRoundedCorner"] = $value;
    return $this;
  }
  
  public function textAlign($value) {
    $this->model["textAlign"] = $value;
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
  
  public function onKeyDown($value) {
    $this->model["onKeyDown"] = $value;
    return $this;
  }
  
  public function keyPress($value) {
    $this->model["keyPress"] = $value;
    return $this;
  }
  
  public function keyUp($value) {
    $this->model["keyUp"] = $value;
    return $this;
  }
  
  public function mouseOut($value) {
    $this->model["mouseOut"] = $value;
    return $this;
  }
  
  public function mouseOver($value) {
    $this->model["mouseOver"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('input') ;
  }
  
  protected function PluginName() {
    return "ejMaskEdit";
  }
  
    
}
  ?>
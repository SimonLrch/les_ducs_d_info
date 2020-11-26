<?php
namespace EJ;
class ColorPicker extends \EJ\Widget {
    
  public function buttonText($value) {
    $this->model["buttonText"] = $value;
    return $this;
  }
  
  public function buttonMode($value) {
    $this->model["buttonMode"] = $value;
    return $this;
  }
  
  public function columns($value) {
    $this->model["columns"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function custom($value) {
    $this->model["custom"] = $value;
    return $this;
  }
  
  public function displayInline($value) {
    $this->model["displayInline"] = $value;
    return $this;
  }
  
  public function enabled($value) {
    $this->model["enabled"] = $value;
    return $this;
  }
  
  public function enableOpacity($value) {
    $this->model["enableOpacity"] = $value;
    return $this;
  }
  
  public function htmlAttributes($value) {
    $this->model["htmlAttributes"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function modelType($value) {
    $this->model["modelType"] = $value;
    return $this;
  }
  
  public function opacityValue($value) {
    $this->model["opacityValue"] = $value;
    return $this;
  }
  
  public function palette($value) {
    $this->model["palette"] = $value;
    return $this;
  }
  
  public function presetType($value) {
    $this->model["presetType"] = $value;
    return $this;
  }
  
  public function showApplyCancel($value) {
    $this->model["showApplyCancel"] = $value;
    return $this;
  }
  
  public function showClearButton($value) {
    $this->model["showClearButton"] = $value;
    return $this;
  }
  
  public function showPreview($value) {
    $this->model["showPreview"] = $value;
    return $this;
  }
  
  public function showRecentColors($value) {
    $this->model["showRecentColors"] = $value;
    return $this;
  }
  
  public function showSwitcher($value) {
    $this->model["showSwitcher"] = $value;
    return $this;
  }
  
  public function showTooltip($value) {
    $this->model["showTooltip"] = $value;
    return $this;
  }
  
  public function toolIcon($value) {
    $this->model["toolIcon"] = $value;
    return $this;
  }
  
  public function tooltipText($value) {
    $this->model["tooltipText"] = $value;
    return $this;
  }
  
  public function value($value) {
    $this->model["value"] = $value;
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
  
  public function open($value) {
    $this->model["open"] = $value;
    return $this;
  }
  
  public function select($value) {
    $this->model["select"] = $value;
    return $this;
  }
  
    
  public function tag($value) {
    $this->tag = $value;
    return $this;
  }

  protected function tagName() {
    if($this->getProperty("tag", $this)) {
      return new \EJ\HtmlTag($this->tag);
    }
    else {
      return new \EJ\HtmlTag('input');
    }
  }
  
  protected function PluginName() {
    return "ejColorPicker";
  }
  
    
}
  ?>
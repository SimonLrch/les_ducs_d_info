<?php
namespace EJ;
class Barcode extends \EJ\Widget {
    
  public function barcodeToTextGapHeight($value) {
    $this->model["barcodeToTextGapHeight"] = $value;
    return $this;
  }
  
  public function barHeight($value) {
    $this->model["barHeight"] = $value;
    return $this;
  }
  
  public function darkBarColor($value) {
    $this->model["darkBarColor"] = $value;
    return $this;
  }
  
  public function displayText($value) {
    $this->model["displayText"] = $value;
    return $this;
  }
  
  public function enabled($value) {
    $this->model["enabled"] = $value;
    return $this;
  }
  
  public function encodeStartStopSymbol($value) {
    $this->model["encodeStartStopSymbol"] = $value;
    return $this;
  }
  
  public function lightBarColor($value) {
    $this->model["lightBarColor"] = $value;
    return $this;
  }
  
  public function narrowBarWidth($value) {
    $this->model["narrowBarWidth"] = $value;
    return $this;
  }
  
  public function quietZone($value) {
    $this->model["quietZone"] = $value;
    return $this;
  }
  
  public function symbologyType($value) {
    $this->model["symbologyType"] = $value;
    return $this;
  }
  
  public function text($value) {
    $this->model["text"] = $value;
    return $this;
  }
  
  public function textColor($value) {
    $this->model["textColor"] = $value;
    return $this;
  }
  
  public function wideBarWidth($value) {
    $this->model["wideBarWidth"] = $value;
    return $this;
  }
  
  public function xDimension($value) {
    $this->model["xDimension"] = $value;
    return $this;
  }
  
  public function load($value) {
    $this->model["load"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejBarcode";
  }
  
    
}
  ?>
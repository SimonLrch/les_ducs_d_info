<?php
namespace EJ;
class RadioButton extends \EJ\Widget {
    
  public function checked($value) {
    $this->model["checked"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
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
  
  public function htmlAttributes($value) {
    $this->model["htmlAttributes"] = $value;
    return $this;
  }
  
  public function id($value) {
    $this->model["id"] = $value;
    return $this;
  }
  
  public function idPrefix($value) {
    $this->model["idPrefix"] = $value;
    return $this;
  }
  
  public function name($value) {
    $this->model["name"] = $value;
    return $this;
  }
  
  public function size($value) {
    $this->model["size"] = $value;
    return $this;
  }
  
  public function text($value) {
    $this->model["text"] = $value;
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
  
  public function beforeChange($value) {
    $this->model["beforeChange"] = $value;
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
  
    protected function tagName() {
	$wrapper = new \EJ\HtmlTag('input');
        $this->setAttribute($wrapper,"type","radio");
	return $wrapper;
}
  protected function PluginName() {
    return "ejRadioButton";
  }
  
    
}
  ?>
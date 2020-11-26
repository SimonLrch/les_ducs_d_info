<?php
namespace EJ;
class Tab extends \EJ\Widget {
    
  public function ajaxSettings($value) {
    $this->model["ajaxSettings"] = $value;
    return $this;
  }
  
  public function allowKeyboardNavigation($value) {
    $this->model["allowKeyboardNavigation"] = $value;
    return $this;
  }
  
  public function collapsible($value) {
    $this->model["collapsible"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function disabledItemIndex($value) {
    $this->model["disabledItemIndex"] = $value;
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
  
  public function enabledItemIndex($value) {
    $this->model["enabledItemIndex"] = $value;
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
  
  public function enableTabScroll($value) {
    $this->model["enableTabScroll"] = $value;
    return $this;
  }
  
  public function events($value) {
    $this->model["events"] = $value;
    return $this;
  }
  
  public function headerPosition($value) {
    $this->model["headerPosition"] = $value;
    return $this;
  }
  
  public function headerSize($value) {
    $this->model["headerSize"] = $value;
    return $this;
  }
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function heightAdjustMode($value) {
    $this->model["heightAdjustMode"] = $value;
    return $this;
  }
  
  public function hiddenItemIndex($value) {
    $this->model["hiddenItemIndex"] = $value;
    return $this;
  }
  
  public function htmlAttributes($value) {
    $this->model["htmlAttributes"] = $value;
    return $this;
  }
  
  public function idPrefix($value) {
    $this->model["idPrefix"] = $value;
    return $this;
  }
  
  public function selectedItemIndex($value) {
    $this->model["selectedItemIndex"] = $value;
    return $this;
  }
  
  public function showCloseButton($value) {
    $this->model["showCloseButton"] = $value;
    return $this;
  }
  
  public function showReloadIcon($value) {
    $this->model["showReloadIcon"] = $value;
    return $this;
  }
  
  public function showRoundedCorner($value) {
    $this->model["showRoundedCorner"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function itemActive($value) {
    $this->model["itemActive"] = $value;
    return $this;
  }
  
  public function ajaxBeforeLoad($value) {
    $this->model["ajaxBeforeLoad"] = $value;
    return $this;
  }
  
  public function ajaxError($value) {
    $this->model["ajaxError"] = $value;
    return $this;
  }
  
  public function ajaxLoad($value) {
    $this->model["ajaxLoad"] = $value;
    return $this;
  }
  
  public function ajaxSuccess($value) {
    $this->model["ajaxSuccess"] = $value;
    return $this;
  }
  
  public function beforeActive($value) {
    $this->model["beforeActive"] = $value;
    return $this;
  }
  
  public function beforeItemRemove($value) {
    $this->model["beforeItemRemove"] = $value;
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
  
  public function itemAdd($value) {
    $this->model["itemAdd"] = $value;
    return $this;
  }
  
  public function itemRemove($value) {
    $this->model["itemRemove"] = $value;
    return $this;
  }
  
    
  public function templateStart() {
    ob_start();
    return $this;
  }

  protected function content($value) {
    $this -> content = $value;
    return $this;
  }

  public function templateEnd() {
    $this -> content(ob_get_clean());
    return $this;
  }
  
    protected function tagName() {
	$wrapper = new \EJ\ContentTemplate('div');
    return $wrapper->template($this->content);
}
  protected function PluginName() {
    return "ejTab";
  }
  
  public function addItem () {
    $this->add('item',func_get_args());
    return $this;
  }
  
}
  ?>
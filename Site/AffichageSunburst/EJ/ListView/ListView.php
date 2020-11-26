<?php
namespace EJ;
class ListView extends \EJ\Widget {
    
  public function ajaxSettings($value) {
    $this->model["ajaxSettings"] = $value;
    return $this;
  }
  
  public function checkedIndices($value) {
    $this->model["checkedIndices"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function dataSource($value) {
    $this->model["dataSource"] = $value;
    return $this;
  }
  
  public function enableAjax($value) {
    $this->model["enableAjax"] = $value;
    return $this;
  }
  
  public function enableCache($value) {
    $this->model["enableCache"] = $value;
    return $this;
  }
  
  public function enableCheckMark($value) {
    $this->model["enableCheckMark"] = $value;
    return $this;
  }
  
  public function enableFiltering($value) {
    $this->model["enableFiltering"] = $value;
    return $this;
  }
  
  public function enableGroupList($value) {
    $this->model["enableGroupList"] = $value;
    return $this;
  }
  
  public function enablePersistence($value) {
    $this->model["enablePersistence"] = $value;
    return $this;
  }
  
  public function fieldSettings($value) {
    $this->model["fieldSettings"] = $value;
    return $this;
  }
  
  public function items($value) {
    $this->model["items"] = $value;
    return $this;
  }
  
  public function headerBackButtonText($value) {
    $this->model["headerBackButtonText"] = $value;
    return $this;
  }
  
  public function headerTitle($value) {
    $this->model["headerTitle"] = $value;
    return $this;
  }
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function persistSelection($value) {
    $this->model["persistSelection"] = $value;
    return $this;
  }
  
  public function preventSelection($value) {
    $this->model["preventSelection"] = $value;
    return $this;
  }
  
  public function query($value) {
    $this->model["query"] = $value;
    return $this;
  }
  
  public function renderTemplate($value) {
    $this->model["renderTemplate"] = $value;
    return $this;
  }
  
  public function selectedItemIndex($value) {
    $this->model["selectedItemIndex"] = $value;
    return $this;
  }
  
  public function showHeader($value) {
    $this->model["showHeader"] = $value;
    return $this;
  }
  
  public function showHeaderBackButton($value) {
    $this->model["showHeaderBackButton"] = $value;
    return $this;
  }
  
  public function templateId($value) {
    $this->model["templateId"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function itemRequestCount($value) {
    $this->model["itemRequestCount"] = $value;
    return $this;
  }
  
  public function totalItemsCount($value) {
    $this->model["totalItemsCount"] = $value;
    return $this;
  }
  
  public function allowVirtualScrolling($value) {
    $this->model["allowVirtualScrolling"] = $value;
    return $this;
  }
  
  public function virtualScrollMode($value) {
    $this->model["virtualScrollMode"] = $value;
    return $this;
  }
  
  public function ajaxBeforeLoad($value) {
    $this->model["ajaxBeforeLoad"] = $value;
    return $this;
  }
  
  public function ajaxComplete($value) {
    $this->model["ajaxComplete"] = $value;
    return $this;
  }
  
  public function ajaxError($value) {
    $this->model["ajaxError"] = $value;
    return $this;
  }
  
  public function ajaxSuccess($value) {
    $this->model["ajaxSuccess"] = $value;
    return $this;
  }
  
  public function load($value) {
    $this->model["load"] = $value;
    return $this;
  }
  
  public function loadComplete($value) {
    $this->model["loadComplete"] = $value;
    return $this;
  }
  
  public function mouseDown($value) {
    $this->model["mouseDown"] = $value;
    return $this;
  }
  
  public function mouseUp($value) {
    $this->model["mouseUp"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejListView";
  }
  
    
}
  ?>
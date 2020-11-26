<?php
namespace EJ;
class Pager extends \EJ\Widget {
    
  public function customText($value) {
    $this->model["customText"] = $value;
    return $this;
  }
  
  public function currentPage($value) {
    $this->model["currentPage"] = $value;
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
  
  public function enableExternalMessage($value) {
    $this->model["enableExternalMessage"] = $value;
    return $this;
  }
  
  public function enableQueryString($value) {
    $this->model["enableQueryString"] = $value;
    return $this;
  }
  
  public function enableRTL($value) {
    $this->model["enableRTL"] = $value;
    return $this;
  }
  
  public function externalMessage($value) {
    $this->model["externalMessage"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function pageCount($value) {
    $this->model["pageCount"] = $value;
    return $this;
  }
  
  public function pageSize($value) {
    $this->model["pageSize"] = $value;
    return $this;
  }
  
  public function pageSizeList($value) {
    $this->model["pageSizeList"] = $value;
    return $this;
  }
  
  public function pageSizeMessage($value) {
    $this->model["pageSizeMessage"] = $value;
    return $this;
  }
  
  public function template($value) {
    $this->model["template"] = $value;
    return $this;
  }
  
  public function totalPages($value) {
    $this->model["totalPages"] = $value;
    return $this;
  }
  
  public function totalRecordsCount($value) {
    $this->model["totalRecordsCount"] = $value;
    return $this;
  }
  
  public function showPageInfo($value) {
    $this->model["showPageInfo"] = $value;
    return $this;
  }
  
  public function click($value) {
    $this->model["click"] = $value;
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
  
  public function pageSizeSelected($value) {
    $this->model["pageSizeSelected"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejPager";
  }
  
    
}
  ?>
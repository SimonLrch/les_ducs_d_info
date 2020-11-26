<?php
namespace EJ;
class ComboBox extends \EJ\Widget {
    
  public function actionFailureTemplate($value) {
    $this->model["actionFailureTemplate"] = $value;
    return $this;
  }
  
  public function allowCustom($value) {
    $this->model["allowCustom"] = $value;
    return $this;
  }
  
  public function allowFiltering($value) {
    $this->model["allowFiltering"] = $value;
    return $this;
  }
  
  public function autofill($value) {
    $this->model["autofill"] = $value;
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
  
  public function enableRtl($value) {
    $this->model["enableRtl"] = $value;
    return $this;
  }
  
  public function enabled($value) {
    $this->model["enabled"] = $value;
    return $this;
  }
  
  public function fields($value) {
    $this->model["fields"] = $value;
    return $this;
  }
  
  public function footerTemplate($value) {
    $this->model["footerTemplate"] = $value;
    return $this;
  }
  
  public function groupTemplate($value) {
    $this->model["groupTemplate"] = $value;
    return $this;
  }
  
  public function headerTemplate($value) {
    $this->model["headerTemplate"] = $value;
    return $this;
  }
  
  public function htmlAttributes($value) {
    $this->model["htmlAttributes"] = $value;
    return $this;
  }
  
  public function index($value) {
    $this->model["index"] = $value;
    return $this;
  }
  
  public function itemTemplate($value) {
    $this->model["itemTemplate"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function noRecordsTemplate($value) {
    $this->model["noRecordsTemplate"] = $value;
    return $this;
  }
  
  public function placeholder($value) {
    $this->model["placeholder"] = $value;
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
  
  public function query($value) {
    $this->model["query"] = $value;
    return $this;
  }
  
  public function readonly($value) {
    $this->model["readonly"] = $value;
    return $this;
  }
  
  public function showClearButton($value) {
    $this->model["showClearButton"] = $value;
    return $this;
  }
  
  public function sortOrder($value) {
    $this->model["sortOrder"] = $value;
    return $this;
  }
  
  public function text($value) {
    $this->model["text"] = $value;
    return $this;
  }
  
  public function value($value) {
    $this->model["value"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function actionBegin($value) {
    $this->model["actionBegin"] = $value;
    return $this;
  }
  
  public function actionComplete($value) {
    $this->model["actionComplete"] = $value;
    return $this;
  }
  
  public function actionFailure($value) {
    $this->model["actionFailure"] = $value;
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
  
  public function customValueSpecifier($value) {
    $this->model["customValueSpecifier"] = $value;
    return $this;
  }
  
  public function filtering($value) {
    $this->model["filtering"] = $value;
    return $this;
  }
  
  public function focus($value) {
    $this->model["focus"] = $value;
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
    return  new \EJ\HtmlTag('input') ;
  }
  
  protected function PluginName() {
    return "ejComboBox";
  }
  
}
  ?>
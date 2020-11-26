<?php
namespace EJ;
class DropDownList extends \EJ\Widget {
    
  public function allowVirtualScrolling($value) {
    $this->model["allowVirtualScrolling"] = $value;
    return $this;
  }
  
  public function cascadeTo($value) {
    $this->model["cascadeTo"] = $value;
    return $this;
  }
  
  public function caseSensitiveSearch($value) {
    $this->model["caseSensitiveSearch"] = $value;
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
  
  public function delimiterChar($value) {
    $this->model["delimiterChar"] = $value;
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
  
  public function enableIncrementalSearch($value) {
    $this->model["enableIncrementalSearch"] = $value;
    return $this;
  }
  
  public function enableFilterSearch($value) {
    $this->model["enableFilterSearch"] = $value;
    return $this;
  }
  
  public function enableServerFiltering($value) {
    $this->model["enableServerFiltering"] = $value;
    return $this;
  }
  
  public function enablePersistence($value) {
    $this->model["enablePersistence"] = $value;
    return $this;
  }
  
  public function enablePopupResize($value) {
    $this->model["enablePopupResize"] = $value;
    return $this;
  }
  
  public function enableRTL($value) {
    $this->model["enableRTL"] = $value;
    return $this;
  }
  
  public function enableSorting($value) {
    $this->model["enableSorting"] = $value;
    return $this;
  }
  
  public function loadOnDemand($value) {
    $this->model["loadOnDemand"] = $value;
    return $this;
  }
  
  public function fields($value) {
    $this->model["fields"] = $value;
    return $this;
  }
  
  public function filterType($value) {
    $this->model["filterType"] = $value;
    return $this;
  }
  
  public function headerTemplate($value) {
    $this->model["headerTemplate"] = $value;
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
  
  public function itemsCount($value) {
    $this->model["itemsCount"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function maxPopupHeight($value) {
    $this->model["maxPopupHeight"] = $value;
    return $this;
  }
  
  public function minPopupHeight($value) {
    $this->model["minPopupHeight"] = $value;
    return $this;
  }
  
  public function maxPopupWidth($value) {
    $this->model["maxPopupWidth"] = $value;
    return $this;
  }
  
  public function minPopupWidth($value) {
    $this->model["minPopupWidth"] = $value;
    return $this;
  }
  
  public function multiSelectMode($value) {
    $this->model["multiSelectMode"] = $value;
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
  
  public function readOnly($value) {
    $this->model["readOnly"] = $value;
    return $this;
  }
  
  public function selectedIndex($value) {
    $this->model["selectedIndex"] = $value;
    return $this;
  }
  
  public function selectedIndices($value) {
    $this->model["selectedIndices"] = $value;
    return $this;
  }
  
  public function showCheckbox($value) {
    $this->model["showCheckbox"] = $value;
    return $this;
  }
  
  public function showPopupOnLoad($value) {
    $this->model["showPopupOnLoad"] = $value;
    return $this;
  }
  
  public function showRoundedCorner($value) {
    $this->model["showRoundedCorner"] = $value;
    return $this;
  }
  
  public function sortOrder($value) {
    $this->model["sortOrder"] = $value;
    return $this;
  }
  
  public function targetID($value) {
    $this->model["targetID"] = $value;
    return $this;
  }
  
  public function template($value) {
    $this->model["template"] = $value;
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
  
  public function watermarkText($value) {
    $this->model["watermarkText"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function virtualScrollMode($value) {
    $this->model["virtualScrollMode"] = $value;
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
  
  public function actionSuccess($value) {
    $this->model["actionSuccess"] = $value;
    return $this;
  }
  
  public function beforePopupHide($value) {
    $this->model["beforePopupHide"] = $value;
    return $this;
  }
  
  public function beforePopupShown($value) {
    $this->model["beforePopupShown"] = $value;
    return $this;
  }
  
  public function cascade($value) {
    $this->model["cascade"] = $value;
    return $this;
  }
  
  public function change($value) {
    $this->model["change"] = $value;
    return $this;
  }
  
  public function checkChange($value) {
    $this->model["checkChange"] = $value;
    return $this;
  }
  
  public function create($value) {
    $this->model["create"] = $value;
    return $this;
  }
  
  public function dataBound($value) {
    $this->model["dataBound"] = $value;
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
  
  public function popupHide($value) {
    $this->model["popupHide"] = $value;
    return $this;
  }
  
  public function popupResize($value) {
    $this->model["popupResize"] = $value;
    return $this;
  }
  
  public function popupShown($value) {
    $this->model["popupShown"] = $value;
    return $this;
  }
  
  public function popupResizeStart($value) {
    $this->model["popupResizeStart"] = $value;
    return $this;
  }
  
  public function popupResizeStop($value) {
    $this->model["popupResizeStop"] = $value;
    return $this;
  }
  
  public function search($value) {
    $this->model["search"] = $value;
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
    return "ejDropDownList";
  }
  
  public function addItem () {
    $this->add('item',func_get_args());
    return $this;
  }
  
}
  ?>
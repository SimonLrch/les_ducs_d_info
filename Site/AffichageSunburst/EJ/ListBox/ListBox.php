<?php
namespace EJ;
class ListBox extends \EJ\Widget {
    
  public function allowDrag($value) {
    $this->model["allowDrag"] = $value;
    return $this;
  }
  
  public function allowDrop($value) {
    $this->model["allowDrop"] = $value;
    return $this;
  }
  
  public function allowMultiSelection($value) {
    $this->model["allowMultiSelection"] = $value;
    return $this;
  }
  
  public function allowVirtualScrolling($value) {
    $this->model["allowVirtualScrolling"] = $value;
    return $this;
  }
  
  public function caseSensitiveSearch($value) {
    $this->model["caseSensitiveSearch"] = $value;
    return $this;
  }
  
  public function cascadeTo($value) {
    $this->model["cascadeTo"] = $value;
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
  
  public function enabled($value) {
    $this->model["enabled"] = $value;
    return $this;
  }
  
  public function enableIncrementalSearch($value) {
    $this->model["enableIncrementalSearch"] = $value;
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
  
  public function enableWordWrap($value) {
    $this->model["enableWordWrap"] = $value;
    return $this;
  }
  
  public function fields($value) {
    $this->model["fields"] = $value;
    return $this;
  }
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function itemHeight($value) {
    $this->model["itemHeight"] = $value;
    return $this;
  }
  
  public function itemsCount($value) {
    $this->model["itemsCount"] = $value;
    return $this;
  }
  
  public function totalItemsCount($value) {
    $this->model["totalItemsCount"] = $value;
    return $this;
  }
  
  public function itemRequestCount($value) {
    $this->model["itemRequestCount"] = $value;
    return $this;
  }
  
  public function loadDataOnInit($value) {
    $this->model["loadDataOnInit"] = $value;
    return $this;
  }
  
  public function query($value) {
    $this->model["query"] = $value;
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
  
  public function showRoundedCorner($value) {
    $this->model["showRoundedCorner"] = $value;
    return $this;
  }
  
  public function sortOrder($value) {
    $this->model["sortOrder"] = $value;
    return $this;
  }
  
  public function template($value) {
    $this->model["template"] = $value;
    return $this;
  }
  
  public function value($value) {
    $this->model["value"] = $value;
    return $this;
  }
  
  public function virtualScrollMode($value) {
    $this->model["virtualScrollMode"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function targetID($value) {
    $this->model["targetID"] = $value;
    return $this;
  }
  
  public function actionBegin($value) {
    $this->model["actionBegin"] = $value;
    return $this;
  }
  
  public function actionSuccess($value) {
    $this->model["actionSuccess"] = $value;
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
  
  public function actionBeforeSuccess($value) {
    $this->model["actionBeforeSuccess"] = $value;
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
  
  public function itemDrag($value) {
    $this->model["itemDrag"] = $value;
    return $this;
  }
  
  public function itemDragStart($value) {
    $this->model["itemDragStart"] = $value;
    return $this;
  }
  
  public function itemDragStop($value) {
    $this->model["itemDragStop"] = $value;
    return $this;
  }
  
  public function itemDrop($value) {
    $this->model["itemDrop"] = $value;
    return $this;
  }
  
  public function select($value) {
    $this->model["select"] = $value;
    return $this;
  }
  
  public function unselect($value) {
    $this->model["unselect"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('ul') ;
  }
  
  protected function PluginName() {
    return "ejListBox";
  }
  
    
}
  ?>
<?php
namespace EJ;
class Kanban extends \EJ\Widget {
    
  public function allowDragAndDrop($value) {
    $this->model["allowDragAndDrop"] = $value;
    return $this;
  }
  
  public function allowExternalDragAndDrop($value) {
    $this->model["allowExternalDragAndDrop"] = $value;
    return $this;
  }
  
  public function allowTitle($value) {
    $this->model["allowTitle"] = $value;
    return $this;
  }
  
  public function swimlaneSettings($value) {
    $this->model["swimlaneSettings"] = $value;
    return $this;
  }
  
  public function allowToggleColumn($value) {
    $this->model["allowToggleColumn"] = $value;
    return $this;
  }
  
  public function allowSearching($value) {
    $this->model["allowSearching"] = $value;
    return $this;
  }
  
  public function allowFiltering($value) {
    $this->model["allowFiltering"] = $value;
    return $this;
  }
  
  public function allowSelection($value) {
    $this->model["allowSelection"] = $value;
    return $this;
  }
  
  public function allowHover($value) {
    $this->model["allowHover"] = $value;
    return $this;
  }
  
  public function allowKeyboardNavigation($value) {
    $this->model["allowKeyboardNavigation"] = $value;
    return $this;
  }
  
  public function allowScrolling($value) {
    $this->model["allowScrolling"] = $value;
    return $this;
  }
  
  public function allowPrinting($value) {
    $this->model["allowPrinting"] = $value;
    return $this;
  }
  
  public function contextMenuSettings($value) {
    $this->model["contextMenuSettings"] = $value;
    return $this;
  }
  
  public function columns($value) {
    $this->model["columns"] = $value;
    return $this;
  }
  
  public function cardSettings($value) {
    $this->model["cardSettings"] = $value;
    return $this;
  }
  
  public function customToolbarItems($value) {
    $this->model["customToolbarItems"] = $value;
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
  
  public function enableTouch($value) {
    $this->model["enableTouch"] = $value;
    return $this;
  }
  
  public function enableRTL($value) {
    $this->model["enableRTL"] = $value;
    return $this;
  }
  
  public function enableTotalCount($value) {
    $this->model["enableTotalCount"] = $value;
    return $this;
  }
  
  public function editSettings($value) {
    $this->model["editSettings"] = $value;
    return $this;
  }
  
  public function fields($value) {
    $this->model["fields"] = $value;
    return $this;
  }
  
  public function keyField($value) {
    $this->model["keyField"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function minWidth($value) {
    $this->model["minWidth"] = $value;
    return $this;
  }
  
  public function filterSettings($value) {
    $this->model["filterSettings"] = $value;
    return $this;
  }
  
  public function query($value) {
    $this->model["query"] = $value;
    return $this;
  }
  
  public function keySettings($value) {
    $this->model["keySettings"] = $value;
    return $this;
  }
  
  public function scrollSettings($value) {
    $this->model["scrollSettings"] = $value;
    return $this;
  }
  
  public function searchSettings($value) {
    $this->model["searchSettings"] = $value;
    return $this;
  }
  
  public function selectionType($value) {
    $this->model["selectionType"] = $value;
    return $this;
  }
  
  public function stackedHeaderRows($value) {
    $this->model["stackedHeaderRows"] = $value;
    return $this;
  }
  
  public function tooltipSettings($value) {
    $this->model["tooltipSettings"] = $value;
    return $this;
  }
  
  public function workflows($value) {
    $this->model["workflows"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function showColumnWhenEmpty($value) {
    $this->model["showColumnWhenEmpty"] = $value;
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
  
  public function beginEdit($value) {
    $this->model["beginEdit"] = $value;
    return $this;
  }
  
  public function beforeCardSelect($value) {
    $this->model["beforeCardSelect"] = $value;
    return $this;
  }
  
  public function cardClick($value) {
    $this->model["cardClick"] = $value;
    return $this;
  }
  
  public function cardDrag($value) {
    $this->model["cardDrag"] = $value;
    return $this;
  }
  
  public function cardDragStart($value) {
    $this->model["cardDragStart"] = $value;
    return $this;
  }
  
  public function cardDragStop($value) {
    $this->model["cardDragStop"] = $value;
    return $this;
  }
  
  public function cardDrop($value) {
    $this->model["cardDrop"] = $value;
    return $this;
  }
  
  public function cardSelect($value) {
    $this->model["cardSelect"] = $value;
    return $this;
  }
  
  public function cardDoubleClick($value) {
    $this->model["cardDoubleClick"] = $value;
    return $this;
  }
  
  public function cardSelecting($value) {
    $this->model["cardSelecting"] = $value;
    return $this;
  }
  
  public function create($value) {
    $this->model["create"] = $value;
    return $this;
  }
  
  public function cellClick($value) {
    $this->model["cellClick"] = $value;
    return $this;
  }
  
  public function contextOpen($value) {
    $this->model["contextOpen"] = $value;
    return $this;
  }
  
  public function contextClick($value) {
    $this->model["contextClick"] = $value;
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
  
  public function endDelete($value) {
    $this->model["endDelete"] = $value;
    return $this;
  }
  
  public function endEdit($value) {
    $this->model["endEdit"] = $value;
    return $this;
  }
  
  public function headerClick($value) {
    $this->model["headerClick"] = $value;
    return $this;
  }
  
  public function load($value) {
    $this->model["load"] = $value;
    return $this;
  }
  
  public function swimlaneClick($value) {
    $this->model["swimlaneClick"] = $value;
    return $this;
  }
  
  public function queryCellInfo($value) {
    $this->model["queryCellInfo"] = $value;
    return $this;
  }
  
  public function toolbarClick($value) {
    $this->model["toolbarClick"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejKanban";
  }
  
    
}
  ?>
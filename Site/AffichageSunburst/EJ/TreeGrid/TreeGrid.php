<?php
namespace EJ;
class TreeGrid extends \EJ\Widget {
    
  public function allowColumnReordering($value) {
    $this->model["allowColumnReordering"] = $value;
    return $this;
  }
  
  public function allowColumnResize($value) {
    $this->model["allowColumnResize"] = $value;
    return $this;
  }
  
  public function allowDragAndDrop($value) {
    $this->model["allowDragAndDrop"] = $value;
    return $this;
  }
  
  public function allowFiltering($value) {
    $this->model["allowFiltering"] = $value;
    return $this;
  }
  
  public function allowKeyboardNavigation($value) {
    $this->model["allowKeyboardNavigation"] = $value;
    return $this;
  }
  
  public function allowMultiSorting($value) {
    $this->model["allowMultiSorting"] = $value;
    return $this;
  }
  
  public function allowPaging($value) {
    $this->model["allowPaging"] = $value;
    return $this;
  }
  
  public function allowSearching($value) {
    $this->model["allowSearching"] = $value;
    return $this;
  }
  
  public function allowSelection($value) {
    $this->model["allowSelection"] = $value;
    return $this;
  }
  
  public function allowSorting($value) {
    $this->model["allowSorting"] = $value;
    return $this;
  }
  
  public function allowTextWrap($value) {
    $this->model["allowTextWrap"] = $value;
    return $this;
  }
  
  public function altRowTemplateID($value) {
    $this->model["altRowTemplateID"] = $value;
    return $this;
  }
  
  public function cellTooltipTemplate($value) {
    $this->model["cellTooltipTemplate"] = $value;
    return $this;
  }
  
  public function childMapping($value) {
    $this->model["childMapping"] = $value;
    return $this;
  }
  
  public function collapsibleTotalSummary($value) {
    $this->model["collapsibleTotalSummary"] = $value;
    return $this;
  }
  
  public function columnDialogFields($value) {
    $this->model["columnDialogFields"] = $value;
    return $this;
  }
  
  public function columnResizeSettings($value) {
    $this->model["columnResizeSettings"] = $value;
    return $this;
  }
  
  public function columns($value) {
    $this->model["columns"] = $value;
    return $this;
  }
  
  public function commonWidth($value) {
    $this->model["commonWidth"] = $value;
    return $this;
  }
  
  public function contextMenuSettings($value) {
    $this->model["contextMenuSettings"] = $value;
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
  
  public function detailsTemplate($value) {
    $this->model["detailsTemplate"] = $value;
    return $this;
  }
  
  public function detailsRowHeight($value) {
    $this->model["detailsRowHeight"] = $value;
    return $this;
  }
  
  public function dragTooltip($value) {
    $this->model["dragTooltip"] = $value;
    return $this;
  }
  
  public function editSettings($value) {
    $this->model["editSettings"] = $value;
    return $this;
  }
  
  public function enableAltRow($value) {
    $this->model["enableAltRow"] = $value;
    return $this;
  }
  
  public function enableCollapseAll($value) {
    $this->model["enableCollapseAll"] = $value;
    return $this;
  }
  
  public function enableLoadOnDemand($value) {
    $this->model["enableLoadOnDemand"] = $value;
    return $this;
  }
  
  public function enableResize($value) {
    $this->model["enableResize"] = $value;
    return $this;
  }
  
  public function enableVirtualization($value) {
    $this->model["enableVirtualization"] = $value;
    return $this;
  }
  
  public function expandStateMapping($value) {
    $this->model["expandStateMapping"] = $value;
    return $this;
  }
  
  public function filterSettings($value) {
    $this->model["filterSettings"] = $value;
    return $this;
  }
  
  public function headerTextOverflow($value) {
    $this->model["headerTextOverflow"] = $value;
    return $this;
  }
  
  public function idMapping($value) {
    $this->model["idMapping"] = $value;
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
  
  public function pageSettings($value) {
    $this->model["pageSettings"] = $value;
    return $this;
  }
  
  public function parentIdMapping($value) {
    $this->model["parentIdMapping"] = $value;
    return $this;
  }
  
  public function parseRowTemplate($value) {
    $this->model["parseRowTemplate"] = $value;
    return $this;
  }
  
  public function query($value) {
    $this->model["query"] = $value;
    return $this;
  }
  
  public function rowHeight($value) {
    $this->model["rowHeight"] = $value;
    return $this;
  }
  
  public function rowTemplateID($value) {
    $this->model["rowTemplateID"] = $value;
    return $this;
  }
  
  public function searchSettings($value) {
    $this->model["searchSettings"] = $value;
    return $this;
  }
  
  public function selectedCellIndexes($value) {
    $this->model["selectedCellIndexes"] = $value;
    return $this;
  }
  
  public function selectedRowIndex($value) {
    $this->model["selectedRowIndex"] = $value;
    return $this;
  }
  
  public function selectionSettings($value) {
    $this->model["selectionSettings"] = $value;
    return $this;
  }
  
  public function showColumnChooser($value) {
    $this->model["showColumnChooser"] = $value;
    return $this;
  }
  
  public function showColumnOptions($value) {
    $this->model["showColumnOptions"] = $value;
    return $this;
  }
  
  public function showDetailsRow($value) {
    $this->model["showDetailsRow"] = $value;
    return $this;
  }
  
  public function showDetailsRowInfoColumn($value) {
    $this->model["showDetailsRowInfoColumn"] = $value;
    return $this;
  }
  
  public function showGridCellTooltip($value) {
    $this->model["showGridCellTooltip"] = $value;
    return $this;
  }
  
  public function showGridExpandCellTooltip($value) {
    $this->model["showGridExpandCellTooltip"] = $value;
    return $this;
  }
  
  public function showStackedHeader($value) {
    $this->model["showStackedHeader"] = $value;
    return $this;
  }
  
  public function showSummaryRow($value) {
    $this->model["showSummaryRow"] = $value;
    return $this;
  }
  
  public function showTotalSummary($value) {
    $this->model["showTotalSummary"] = $value;
    return $this;
  }
  
  public function sizeSettings($value) {
    $this->model["sizeSettings"] = $value;
    return $this;
  }
  
  public function sortSettings($value) {
    $this->model["sortSettings"] = $value;
    return $this;
  }
  
  public function stackedHeaderRows($value) {
    $this->model["stackedHeaderRows"] = $value;
    return $this;
  }
  
  public function summaryRows($value) {
    $this->model["summaryRows"] = $value;
    return $this;
  }
  
  public function toolbarSettings($value) {
    $this->model["toolbarSettings"] = $value;
    return $this;
  }
  
  public function totalSummaryHeight($value) {
    $this->model["totalSummaryHeight"] = $value;
    return $this;
  }
  
  public function treeColumnIndex($value) {
    $this->model["treeColumnIndex"] = $value;
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
  
  public function beforePrint($value) {
    $this->model["beforePrint"] = $value;
    return $this;
  }
  
  public function beginEdit($value) {
    $this->model["beginEdit"] = $value;
    return $this;
  }
  
  public function cellSelected($value) {
    $this->model["cellSelected"] = $value;
    return $this;
  }
  
  public function cellSelecting($value) {
    $this->model["cellSelecting"] = $value;
    return $this;
  }
  
  public function collapsed($value) {
    $this->model["collapsed"] = $value;
    return $this;
  }
  
  public function collapsing($value) {
    $this->model["collapsing"] = $value;
    return $this;
  }
  
  public function columnDrag($value) {
    $this->model["columnDrag"] = $value;
    return $this;
  }
  
  public function columnDragStart($value) {
    $this->model["columnDragStart"] = $value;
    return $this;
  }
  
  public function columnDrop($value) {
    $this->model["columnDrop"] = $value;
    return $this;
  }
  
  public function columnResizeEnd($value) {
    $this->model["columnResizeEnd"] = $value;
    return $this;
  }
  
  public function columnResizeStart($value) {
    $this->model["columnResizeStart"] = $value;
    return $this;
  }
  
  public function columnResized($value) {
    $this->model["columnResized"] = $value;
    return $this;
  }
  
  public function contextMenuOpen($value) {
    $this->model["contextMenuOpen"] = $value;
    return $this;
  }
  
  public function create($value) {
    $this->model["create"] = $value;
    return $this;
  }
  
  public function detailsDataBound($value) {
    $this->model["detailsDataBound"] = $value;
    return $this;
  }
  
  public function detailsHidden($value) {
    $this->model["detailsHidden"] = $value;
    return $this;
  }
  
  public function detailsShown($value) {
    $this->model["detailsShown"] = $value;
    return $this;
  }
  
  public function endEdit($value) {
    $this->model["endEdit"] = $value;
    return $this;
  }
  
  public function expanded($value) {
    $this->model["expanded"] = $value;
    return $this;
  }
  
  public function expanding($value) {
    $this->model["expanding"] = $value;
    return $this;
  }
  
  public function load($value) {
    $this->model["load"] = $value;
    return $this;
  }
  
  public function queryCellInfo($value) {
    $this->model["queryCellInfo"] = $value;
    return $this;
  }
  
  public function recordClick($value) {
    $this->model["recordClick"] = $value;
    return $this;
  }
  
  public function recordDoubleClick($value) {
    $this->model["recordDoubleClick"] = $value;
    return $this;
  }
  
  public function rowDataBound($value) {
    $this->model["rowDataBound"] = $value;
    return $this;
  }
  
  public function rowDrag($value) {
    $this->model["rowDrag"] = $value;
    return $this;
  }
  
  public function rowDragStart($value) {
    $this->model["rowDragStart"] = $value;
    return $this;
  }
  
  public function rowDragStop($value) {
    $this->model["rowDragStop"] = $value;
    return $this;
  }
  
  public function rowDropActionBegin($value) {
    $this->model["rowDropActionBegin"] = $value;
    return $this;
  }
  
  public function rowSelected($value) {
    $this->model["rowSelected"] = $value;
    return $this;
  }
  
  public function rowSelecting($value) {
    $this->model["rowSelecting"] = $value;
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
    return "ejTreeGrid";
  }
  
    
}
  ?>
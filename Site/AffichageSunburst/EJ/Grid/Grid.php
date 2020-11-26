<?php
namespace EJ;
class Grid extends \EJ\Widget {
    
  public function allowCellMerging($value) {
    $this->model["allowCellMerging"] = $value;
    return $this;
  }
  
  public function allowGrouping($value) {
    $this->model["allowGrouping"] = $value;
    return $this;
  }
  
  public function allowKeyboardNavigation($value) {
    $this->model["allowKeyboardNavigation"] = $value;
    return $this;
  }
  
  public function allowFiltering($value) {
    $this->model["allowFiltering"] = $value;
    return $this;
  }
  
  public function allowSorting($value) {
    $this->model["allowSorting"] = $value;
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
  
  public function allowReordering($value) {
    $this->model["allowReordering"] = $value;
    return $this;
  }
  
  public function allowResizeToFit($value) {
    $this->model["allowResizeToFit"] = $value;
    return $this;
  }
  
  public function allowResizing($value) {
    $this->model["allowResizing"] = $value;
    return $this;
  }
  
  public function allowRowDragAndDrop($value) {
    $this->model["allowRowDragAndDrop"] = $value;
    return $this;
  }
  
  public function allowScrolling($value) {
    $this->model["allowScrolling"] = $value;
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
  
  public function allowTextWrap($value) {
    $this->model["allowTextWrap"] = $value;
    return $this;
  }
  
  public function allowMultipleExporting($value) {
    $this->model["allowMultipleExporting"] = $value;
    return $this;
  }
  
  public function commonWidth($value) {
    $this->model["commonWidth"] = $value;
    return $this;
  }
  
  public function gridLines($value) {
    $this->model["gridLines"] = $value;
    return $this;
  }
  
  public function childGrid($value) {
    $this->model["childGrid"] = $value;
    return $this;
  }
  
  public function columnLayout($value) {
    $this->model["columnLayout"] = $value;
    return $this;
  }
  
  public function columns($value) {
    $this->model["columns"] = $value;
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
  
  public function editSettings($value) {
    $this->model["editSettings"] = $value;
    return $this;
  }
  
  public function enableAltRow($value) {
    $this->model["enableAltRow"] = $value;
    return $this;
  }
  
  public function enableAutoSaveOnSelectionChange($value) {
    $this->model["enableAutoSaveOnSelectionChange"] = $value;
    return $this;
  }
  
  public function enableHeaderHover($value) {
    $this->model["enableHeaderHover"] = $value;
    return $this;
  }
  
  public function enablePersistence($value) {
    $this->model["enablePersistence"] = $value;
    return $this;
  }
  
  public function enableResponsiveRow($value) {
    $this->model["enableResponsiveRow"] = $value;
    return $this;
  }
  
  public function enableRowHover($value) {
    $this->model["enableRowHover"] = $value;
    return $this;
  }
  
  public function enableRTL($value) {
    $this->model["enableRTL"] = $value;
    return $this;
  }
  
  public function enableTouch($value) {
    $this->model["enableTouch"] = $value;
    return $this;
  }
  
  public function enableToolbarItems($value) {
    $this->model["enableToolbarItems"] = $value;
    return $this;
  }
  
  public function exportToExcelAction($value) {
    $this->model["exportToExcelAction"] = $value;
    return $this;
  }
  
  public function exportToPdfAction($value) {
    $this->model["exportToPdfAction"] = $value;
    return $this;
  }
  
  public function exportToWordAction($value) {
    $this->model["exportToWordAction"] = $value;
    return $this;
  }
  
  public function filterSettings($value) {
    $this->model["filterSettings"] = $value;
    return $this;
  }
  
  public function groupSettings($value) {
    $this->model["groupSettings"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function keySettings($value) {
    $this->model["keySettings"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function minWidth($value) {
    $this->model["minWidth"] = $value;
    return $this;
  }
  
  public function pageSettings($value) {
    $this->model["pageSettings"] = $value;
    return $this;
  }
  
  public function query($value) {
    $this->model["query"] = $value;
    return $this;
  }
  
  public function resizeSettings($value) {
    $this->model["resizeSettings"] = $value;
    return $this;
  }
  
  public function rowTemplate($value) {
    $this->model["rowTemplate"] = $value;
    return $this;
  }
  
  public function rowDropSettings($value) {
    $this->model["rowDropSettings"] = $value;
    return $this;
  }
  
  public function searchSettings($value) {
    $this->model["searchSettings"] = $value;
    return $this;
  }
  
  public function selectedRecords($value) {
    $this->model["selectedRecords"] = $value;
    return $this;
  }
  
  public function selectedRowIndex($value) {
    $this->model["selectedRowIndex"] = $value;
    return $this;
  }
  
  public function selectedRowIndices($value) {
    $this->model["selectedRowIndices"] = $value;
    return $this;
  }
  
  public function selectionSettings($value) {
    $this->model["selectionSettings"] = $value;
    return $this;
  }
  
  public function selectionType($value) {
    $this->model["selectionType"] = $value;
    return $this;
  }
  
  public function scrollSettings($value) {
    $this->model["scrollSettings"] = $value;
    return $this;
  }
  
  public function showColumnChooser($value) {
    $this->model["showColumnChooser"] = $value;
    return $this;
  }
  
  public function showStackedHeader($value) {
    $this->model["showStackedHeader"] = $value;
    return $this;
  }
  
  public function showSummary($value) {
    $this->model["showSummary"] = $value;
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
  
  public function textWrapSettings($value) {
    $this->model["textWrapSettings"] = $value;
    return $this;
  }
  
  public function toolbarSettings($value) {
    $this->model["toolbarSettings"] = $value;
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
  
  public function batchAdd($value) {
    $this->model["batchAdd"] = $value;
    return $this;
  }
  
  public function batchDelete($value) {
    $this->model["batchDelete"] = $value;
    return $this;
  }
  
  public function beforeBatchAdd($value) {
    $this->model["beforeBatchAdd"] = $value;
    return $this;
  }
  
  public function beforeBatchDelete($value) {
    $this->model["beforeBatchDelete"] = $value;
    return $this;
  }
  
  public function beforeBatchSave($value) {
    $this->model["beforeBatchSave"] = $value;
    return $this;
  }
  
  public function beforePrint($value) {
    $this->model["beforePrint"] = $value;
    return $this;
  }
  
  public function beforeRowDrop($value) {
    $this->model["beforeRowDrop"] = $value;
    return $this;
  }
  
  public function beginEdit($value) {
    $this->model["beginEdit"] = $value;
    return $this;
  }
  
  public function cellEdit($value) {
    $this->model["cellEdit"] = $value;
    return $this;
  }
  
  public function cellSave($value) {
    $this->model["cellSave"] = $value;
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
  
  public function cellDeselected($value) {
    $this->model["cellDeselected"] = $value;
    return $this;
  }
  
  public function cellDeselecting($value) {
    $this->model["cellDeselecting"] = $value;
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
  
  public function columnSelected($value) {
    $this->model["columnSelected"] = $value;
    return $this;
  }
  
  public function columnSelecting($value) {
    $this->model["columnSelecting"] = $value;
    return $this;
  }
  
  public function columnDeselected($value) {
    $this->model["columnDeselected"] = $value;
    return $this;
  }
  
  public function columnDeselecting($value) {
    $this->model["columnDeselecting"] = $value;
    return $this;
  }
  
  public function contextClick($value) {
    $this->model["contextClick"] = $value;
    return $this;
  }
  
  public function contextOpen($value) {
    $this->model["contextOpen"] = $value;
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
  
  public function detailsCollapse($value) {
    $this->model["detailsCollapse"] = $value;
    return $this;
  }
  
  public function detailsDataBound($value) {
    $this->model["detailsDataBound"] = $value;
    return $this;
  }
  
  public function detailsExpand($value) {
    $this->model["detailsExpand"] = $value;
    return $this;
  }
  
  public function endAdd($value) {
    $this->model["endAdd"] = $value;
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
  
  public function load($value) {
    $this->model["load"] = $value;
    return $this;
  }
  
  public function mergeHeaderCellInfo($value) {
    $this->model["mergeHeaderCellInfo"] = $value;
    return $this;
  }
  
  public function mergeCellInfo($value) {
    $this->model["mergeCellInfo"] = $value;
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
  
  public function resized($value) {
    $this->model["resized"] = $value;
    return $this;
  }
  
  public function resizeEnd($value) {
    $this->model["resizeEnd"] = $value;
    return $this;
  }
  
  public function resizeStart($value) {
    $this->model["resizeStart"] = $value;
    return $this;
  }
  
  public function rightClick($value) {
    $this->model["rightClick"] = $value;
    return $this;
  }
  
  public function rowDataBound($value) {
    $this->model["rowDataBound"] = $value;
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
  
  public function rowDeselected($value) {
    $this->model["rowDeselected"] = $value;
    return $this;
  }
  
  public function rowDeselecting($value) {
    $this->model["rowDeselecting"] = $value;
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
  
  public function rowDrop($value) {
    $this->model["rowDrop"] = $value;
    return $this;
  }
  
  public function rowHover($value) {
    $this->model["rowHover"] = $value;
    return $this;
  }
  
  public function templateRefresh($value) {
    $this->model["templateRefresh"] = $value;
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
    return "ejGrid";
  }
  
    
}
  ?>
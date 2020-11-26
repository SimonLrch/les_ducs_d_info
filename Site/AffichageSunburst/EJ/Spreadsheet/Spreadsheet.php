<?php
namespace EJ;
class Spreadsheet extends \EJ\Widget {
    
  public function activeSheetIndex($value) {
    $this->model["activeSheetIndex"] = $value;
    return $this;
  }
  
  public function allowAutoCellType($value) {
    $this->model["allowAutoCellType"] = $value;
    return $this;
  }
  
  public function allowAutoFill($value) {
    $this->model["allowAutoFill"] = $value;
    return $this;
  }
  
  public function allowAutoSum($value) {
    $this->model["allowAutoSum"] = $value;
    return $this;
  }
  
  public function allowCellFormatting($value) {
    $this->model["allowCellFormatting"] = $value;
    return $this;
  }
  
  public function allowCellType($value) {
    $this->model["allowCellType"] = $value;
    return $this;
  }
  
  public function allowCharts($value) {
    $this->model["allowCharts"] = $value;
    return $this;
  }
  
  public function allowClear($value) {
    $this->model["allowClear"] = $value;
    return $this;
  }
  
  public function allowClipboard($value) {
    $this->model["allowClipboard"] = $value;
    return $this;
  }
  
  public function allowComments($value) {
    $this->model["allowComments"] = $value;
    return $this;
  }
  
  public function allowConditionalFormats($value) {
    $this->model["allowConditionalFormats"] = $value;
    return $this;
  }
  
  public function allowDataValidation($value) {
    $this->model["allowDataValidation"] = $value;
    return $this;
  }
  
  public function allowDelete($value) {
    $this->model["allowDelete"] = $value;
    return $this;
  }
  
  public function allowDragAndDrop($value) {
    $this->model["allowDragAndDrop"] = $value;
    return $this;
  }
  
  public function allowEditing($value) {
    $this->model["allowEditing"] = $value;
    return $this;
  }
  
  public function allowFiltering($value) {
    $this->model["allowFiltering"] = $value;
    return $this;
  }
  
  public function allowFormatAsTable($value) {
    $this->model["allowFormatAsTable"] = $value;
    return $this;
  }
  
  public function allowFormatPainter($value) {
    $this->model["allowFormatPainter"] = $value;
    return $this;
  }
  
  public function allowFormulaBar($value) {
    $this->model["allowFormulaBar"] = $value;
    return $this;
  }
  
  public function allowFreezing($value) {
    $this->model["allowFreezing"] = $value;
    return $this;
  }
  
  public function allowHyperlink($value) {
    $this->model["allowHyperlink"] = $value;
    return $this;
  }
  
  public function allowImport($value) {
    $this->model["allowImport"] = $value;
    return $this;
  }
  
  public function allowInsert($value) {
    $this->model["allowInsert"] = $value;
    return $this;
  }
  
  public function allowKeyboardNavigation($value) {
    $this->model["allowKeyboardNavigation"] = $value;
    return $this;
  }
  
  public function allowLockCell($value) {
    $this->model["allowLockCell"] = $value;
    return $this;
  }
  
  public function allowMerging($value) {
    $this->model["allowMerging"] = $value;
    return $this;
  }
  
  public function allowOverflow($value) {
    $this->model["allowOverflow"] = $value;
    return $this;
  }
  
  public function allowResizing($value) {
    $this->model["allowResizing"] = $value;
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
  
  public function allowSparkline($value) {
    $this->model["allowSparkline"] = $value;
    return $this;
  }
  
  public function allowUndoRedo($value) {
    $this->model["allowUndoRedo"] = $value;
    return $this;
  }
  
  public function allowWrap($value) {
    $this->model["allowWrap"] = $value;
    return $this;
  }
  
  public function apWidth($value) {
    $this->model["apWidth"] = $value;
    return $this;
  }
  
  public function autoFillSettings($value) {
    $this->model["autoFillSettings"] = $value;
    return $this;
  }
  
  public function chartSettings($value) {
    $this->model["chartSettings"] = $value;
    return $this;
  }
  
  public function columnCount($value) {
    $this->model["columnCount"] = $value;
    return $this;
  }
  
  public function columnWidth($value) {
    $this->model["columnWidth"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function customFormulas($value) {
    $this->model["customFormulas"] = $value;
    return $this;
  }
  
  public function enableContextMenu($value) {
    $this->model["enableContextMenu"] = $value;
    return $this;
  }
  
  public function enablePivotTable($value) {
    $this->model["enablePivotTable"] = $value;
    return $this;
  }
  
  public function enableTouch($value) {
    $this->model["enableTouch"] = $value;
    return $this;
  }
  
  public function exportSettings($value) {
    $this->model["exportSettings"] = $value;
    return $this;
  }
  
  public function formatSettings($value) {
    $this->model["formatSettings"] = $value;
    return $this;
  }
  
  public function importSettings($value) {
    $this->model["importSettings"] = $value;
    return $this;
  }
  
  public function isImport($value) {
    $this->model["isImport"] = $value;
    return $this;
  }
  
  public function isReadOnly($value) {
    $this->model["isReadOnly"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function nameManager($value) {
    $this->model["nameManager"] = $value;
    return $this;
  }
  
  public function pictureSettings($value) {
    $this->model["pictureSettings"] = $value;
    return $this;
  }
  
  public function printSettings($value) {
    $this->model["printSettings"] = $value;
    return $this;
  }
  
  public function ribbonSettings($value) {
    $this->model["ribbonSettings"] = $value;
    return $this;
  }
  
  public function rowCount($value) {
    $this->model["rowCount"] = $value;
    return $this;
  }
  
  public function rowHeight($value) {
    $this->model["rowHeight"] = $value;
    return $this;
  }
  
  public function scrollSettings($value) {
    $this->model["scrollSettings"] = $value;
    return $this;
  }
  
  public function selectionSettings($value) {
    $this->model["selectionSettings"] = $value;
    return $this;
  }
  
  public function sheetCount($value) {
    $this->model["sheetCount"] = $value;
    return $this;
  }
  
  public function sheets($value) {
    $this->model["sheets"] = $value;
    return $this;
  }
  
  public function showPager($value) {
    $this->model["showPager"] = $value;
    return $this;
  }
  
  public function showRibbon($value) {
    $this->model["showRibbon"] = $value;
    return $this;
  }
  
  public function undoRedoStep($value) {
    $this->model["undoRedoStep"] = $value;
    return $this;
  }
  
  public function userName($value) {
    $this->model["userName"] = $value;
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
  
  public function autoFillBegin($value) {
    $this->model["autoFillBegin"] = $value;
    return $this;
  }
  
  public function autoFillComplete($value) {
    $this->model["autoFillComplete"] = $value;
    return $this;
  }
  
  public function beforeBatchSave($value) {
    $this->model["beforeBatchSave"] = $value;
    return $this;
  }
  
  public function beforeCellFormat($value) {
    $this->model["beforeCellFormat"] = $value;
    return $this;
  }
  
  public function beforeCellSelect($value) {
    $this->model["beforeCellSelect"] = $value;
    return $this;
  }
  
  public function beforeDrop($value) {
    $this->model["beforeDrop"] = $value;
    return $this;
  }
  
  public function beforeEditComment($value) {
    $this->model["beforeEditComment"] = $value;
    return $this;
  }
  
  public function beforeOpen($value) {
    $this->model["beforeOpen"] = $value;
    return $this;
  }
  
  public function beforePanelOpen($value) {
    $this->model["beforePanelOpen"] = $value;
    return $this;
  }
  
  public function cellClick($value) {
    $this->model["cellClick"] = $value;
    return $this;
  }
  
  public function cellEdit($value) {
    $this->model["cellEdit"] = $value;
    return $this;
  }
  
  public function cellFormatting($value) {
    $this->model["cellFormatting"] = $value;
    return $this;
  }
  
  public function cellHover($value) {
    $this->model["cellHover"] = $value;
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
  
  public function contextMenuClick($value) {
    $this->model["contextMenuClick"] = $value;
    return $this;
  }
  
  public function drag($value) {
    $this->model["drag"] = $value;
    return $this;
  }
  
  public function dragShape($value) {
    $this->model["dragShape"] = $value;
    return $this;
  }
  
  public function dragStart($value) {
    $this->model["dragStart"] = $value;
    return $this;
  }
  
  public function drop($value) {
    $this->model["drop"] = $value;
    return $this;
  }
  
  public function editRangeBegin($value) {
    $this->model["editRangeBegin"] = $value;
    return $this;
  }
  
  public function editRangeComplete($value) {
    $this->model["editRangeComplete"] = $value;
    return $this;
  }
  
  public function keyDown($value) {
    $this->model["keyDown"] = $value;
    return $this;
  }
  
  public function keyUp($value) {
    $this->model["keyUp"] = $value;
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
  
  public function menuClick($value) {
    $this->model["menuClick"] = $value;
    return $this;
  }
  
  public function onImport($value) {
    $this->model["onImport"] = $value;
    return $this;
  }
  
  public function openFailure($value) {
    $this->model["openFailure"] = $value;
    return $this;
  }
  
  public function pagerClick($value) {
    $this->model["pagerClick"] = $value;
    return $this;
  }
  
  public function resizeStart($value) {
    $this->model["resizeStart"] = $value;
    return $this;
  }
  
  public function resizeEnd($value) {
    $this->model["resizeEnd"] = $value;
    return $this;
  }
  
  public function ribbonClick($value) {
    $this->model["ribbonClick"] = $value;
    return $this;
  }
  
  public function scrollStop($value) {
    $this->model["scrollStop"] = $value;
    return $this;
  }
  
  public function tabClick($value) {
    $this->model["tabClick"] = $value;
    return $this;
  }
  
  public function tabSelect($value) {
    $this->model["tabSelect"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejSpreadsheet";
  }
  
    
}
  ?>
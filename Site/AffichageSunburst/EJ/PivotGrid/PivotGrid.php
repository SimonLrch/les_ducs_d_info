<?php
namespace EJ;
class PivotGrid extends \EJ\Widget {
    
  public function analysisMode($value) {
    $this->model["analysisMode"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function pivotTableFieldListID($value) {
    $this->model["pivotTableFieldListID"] = $value;
    return $this;
  }
  
  public function dataSource($value) {
    $this->model["dataSource"] = $value;
    return $this;
  }
  
  public function valueSortSettings($value) {
    $this->model["valueSortSettings"] = $value;
    return $this;
  }
  
  public function frozenHeaderSettings($value) {
    $this->model["frozenHeaderSettings"] = $value;
    return $this;
  }
  
  public function headerSettings($value) {
    $this->model["headerSettings"] = $value;
    return $this;
  }
  
  public function showUniqueNameOnPivotButton($value) {
    $this->model["showUniqueNameOnPivotButton"] = $value;
    return $this;
  }
  
  public function customObject($value) {
    $this->model["customObject"] = $value;
    return $this;
  }
  
  public function collapsedMembers($value) {
    $this->model["collapsedMembers"] = $value;
    return $this;
  }
  
  public function enableCellContext($value) {
    $this->model["enableCellContext"] = $value;
    return $this;
  }
  
  public function enableCellSelection($value) {
    $this->model["enableCellSelection"] = $value;
    return $this;
  }
  
  public function enableDrillThrough($value) {
    $this->model["enableDrillThrough"] = $value;
    return $this;
  }
  
  public function enableCellClick($value) {
    $this->model["enableCellClick"] = $value;
    return $this;
  }
  
  public function enableCellDoubleClick($value) {
    $this->model["enableCellDoubleClick"] = $value;
    return $this;
  }
  
  public function enableCellEditing($value) {
    $this->model["enableCellEditing"] = $value;
    return $this;
  }
  
  public function enableCollapseByDefault($value) {
    $this->model["enableCollapseByDefault"] = $value;
    return $this;
  }
  
  public function enableColumnGrandTotal($value) {
    $this->model["enableColumnGrandTotal"] = $value;
    return $this;
  }
  
  public function enableConditionalFormatting($value) {
    $this->model["enableConditionalFormatting"] = $value;
    return $this;
  }
  
  public function enableAdvancedFilter($value) {
    $this->model["enableAdvancedFilter"] = $value;
    return $this;
  }
  
  public function enableDeferUpdate($value) {
    $this->model["enableDeferUpdate"] = $value;
    return $this;
  }
  
  public function enableGroupingBar($value) {
    $this->model["enableGroupingBar"] = $value;
    return $this;
  }
  
  public function maxNodeLimitInMemberEditor($value) {
    $this->model["maxNodeLimitInMemberEditor"] = $value;
    return $this;
  }
  
  public function enableMemberEditorPaging($value) {
    $this->model["enableMemberEditorPaging"] = $value;
    return $this;
  }
  
  public function memberEditorPageSize($value) {
    $this->model["memberEditorPageSize"] = $value;
    return $this;
  }
  
  public function enableMemberEditorSorting($value) {
    $this->model["enableMemberEditorSorting"] = $value;
    return $this;
  }
  
  public function enableGrandTotal($value) {
    $this->model["enableGrandTotal"] = $value;
    return $this;
  }
  
  public function enableJSONRendering($value) {
    $this->model["enableJSONRendering"] = $value;
    return $this;
  }
  
  public function enablePivotFieldList($value) {
    $this->model["enablePivotFieldList"] = $value;
    return $this;
  }
  
  public function enableRowGrandTotal($value) {
    $this->model["enableRowGrandTotal"] = $value;
    return $this;
  }
  
  public function enableRTL($value) {
    $this->model["enableRTL"] = $value;
    return $this;
  }
  
  public function enableToolTip($value) {
    $this->model["enableToolTip"] = $value;
    return $this;
  }
  
  public function enableToolTipAnimation($value) {
    $this->model["enableToolTipAnimation"] = $value;
    return $this;
  }
  
  public function enableColumnResizing($value) {
    $this->model["enableColumnResizing"] = $value;
    return $this;
  }
  
  public function resizeColumnsToFit($value) {
    $this->model["resizeColumnsToFit"] = $value;
    return $this;
  }
  
  public function enableContextMenu($value) {
    $this->model["enableContextMenu"] = $value;
    return $this;
  }
  
  public function enableVirtualScrolling($value) {
    $this->model["enableVirtualScrolling"] = $value;
    return $this;
  }
  
  public function enablePaging($value) {
    $this->model["enablePaging"] = $value;
    return $this;
  }
  
  public function hyperlinkSettings($value) {
    $this->model["hyperlinkSettings"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function jsonRecords($value) {
    $this->model["jsonRecords"] = $value;
    return $this;
  }
  
  public function layout($value) {
    $this->model["layout"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function operationalMode($value) {
    $this->model["operationalMode"] = $value;
    return $this;
  }
  
  public function serviceMethodSettings($value) {
    $this->model["serviceMethodSettings"] = $value;
    return $this;
  }
  
  public function url($value) {
    $this->model["url"] = $value;
    return $this;
  }
  
  public function enableCompleteDataExport($value) {
    $this->model["enableCompleteDataExport"] = $value;
    return $this;
  }
  
  public function enableXHRCredentials($value) {
    $this->model["enableXHRCredentials"] = $value;
    return $this;
  }
  
  public function afterServiceInvoke($value) {
    $this->model["afterServiceInvoke"] = $value;
    return $this;
  }
  
  public function beforeServiceInvoke($value) {
    $this->model["beforeServiceInvoke"] = $value;
    return $this;
  }
  
  public function beforePivotEnginePopulate($value) {
    $this->model["beforePivotEnginePopulate"] = $value;
    return $this;
  }
  
  public function cellClick($value) {
    $this->model["cellClick"] = $value;
    return $this;
  }
  
  public function cellDoubleClick($value) {
    $this->model["cellDoubleClick"] = $value;
    return $this;
  }
  
  public function cellContext($value) {
    $this->model["cellContext"] = $value;
    return $this;
  }
  
  public function cellSelection($value) {
    $this->model["cellSelection"] = $value;
    return $this;
  }
  
  public function columnHeaderHyperlinkClick($value) {
    $this->model["columnHeaderHyperlinkClick"] = $value;
    return $this;
  }
  
  public function drillSuccess($value) {
    $this->model["drillSuccess"] = $value;
    return $this;
  }
  
  public function drillThrough($value) {
    $this->model["drillThrough"] = $value;
    return $this;
  }
  
  public function load($value) {
    $this->model["load"] = $value;
    return $this;
  }
  
  public function renderComplete($value) {
    $this->model["renderComplete"] = $value;
    return $this;
  }
  
  public function renderFailure($value) {
    $this->model["renderFailure"] = $value;
    return $this;
  }
  
  public function renderSuccess($value) {
    $this->model["renderSuccess"] = $value;
    return $this;
  }
  
  public function rowHeaderHyperlinkClick($value) {
    $this->model["rowHeaderHyperlinkClick"] = $value;
    return $this;
  }
  
  public function summaryCellHyperlinkClick($value) {
    $this->model["summaryCellHyperlinkClick"] = $value;
    return $this;
  }
  
  public function valueCellHyperlinkClick($value) {
    $this->model["valueCellHyperlinkClick"] = $value;
    return $this;
  }
  
  public function saveReport($value) {
    $this->model["saveReport"] = $value;
    return $this;
  }
  
  public function loadReport($value) {
    $this->model["loadReport"] = $value;
    return $this;
  }
  
  public function beforeExport($value) {
    $this->model["beforeExport"] = $value;
    return $this;
  }
  
  public function cellEdit($value) {
    $this->model["cellEdit"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejPivotGrid";
  }
  
    
}
  ?>
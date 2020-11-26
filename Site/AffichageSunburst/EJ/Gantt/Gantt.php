<?php
namespace EJ;
class Gantt extends \EJ\Widget {
    
  public function addDialogFields($value) {
    $this->model["addDialogFields"] = $value;
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
  
  public function allowGanttChartEditing($value) {
    $this->model["allowGanttChartEditing"] = $value;
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
  
  public function allowMultipleExporting($value) {
    $this->model["allowMultipleExporting"] = $value;
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
  
  public function allowUnscheduledTask($value) {
    $this->model["allowUnscheduledTask"] = $value;
    return $this;
  }
  
  public function baselineColor($value) {
    $this->model["baselineColor"] = $value;
    return $this;
  }
  
  public function baselineEndDateMapping($value) {
    $this->model["baselineEndDateMapping"] = $value;
    return $this;
  }
  
  public function baselineStartDateMapping($value) {
    $this->model["baselineStartDateMapping"] = $value;
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
  
  public function columnDialogFields($value) {
    $this->model["columnDialogFields"] = $value;
    return $this;
  }
  
  public function connectorLineBackground($value) {
    $this->model["connectorLineBackground"] = $value;
    return $this;
  }
  
  public function connectorlineWidth($value) {
    $this->model["connectorlineWidth"] = $value;
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
  
  public function dateFormat($value) {
    $this->model["dateFormat"] = $value;
    return $this;
  }
  
  public function dayWorkingTime($value) {
    $this->model["dayWorkingTime"] = $value;
    return $this;
  }
  
  public function dragTooltip($value) {
    $this->model["dragTooltip"] = $value;
    return $this;
  }
  
  public function durationMapping($value) {
    $this->model["durationMapping"] = $value;
    return $this;
  }
  
  public function durationUnit($value) {
    $this->model["durationUnit"] = $value;
    return $this;
  }
  
  public function durationUnitMapping($value) {
    $this->model["durationUnitMapping"] = $value;
    return $this;
  }
  
  public function editDialogFields($value) {
    $this->model["editDialogFields"] = $value;
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
  
  public function enableContextMenu($value) {
    $this->model["enableContextMenu"] = $value;
    return $this;
  }
  
  public function enablePredecessorValidation($value) {
    $this->model["enablePredecessorValidation"] = $value;
    return $this;
  }
  
  public function enableProgressBarResizing($value) {
    $this->model["enableProgressBarResizing"] = $value;
    return $this;
  }
  
  public function enableResize($value) {
    $this->model["enableResize"] = $value;
    return $this;
  }
  
  public function enableSerialNumber($value) {
    $this->model["enableSerialNumber"] = $value;
    return $this;
  }
  
  public function enableTaskbarDragTooltip($value) {
    $this->model["enableTaskbarDragTooltip"] = $value;
    return $this;
  }
  
  public function enableTaskbarTooltip($value) {
    $this->model["enableTaskbarTooltip"] = $value;
    return $this;
  }
  
  public function enableVirtualization($value) {
    $this->model["enableVirtualization"] = $value;
    return $this;
  }
  
  public function enableWBS($value) {
    $this->model["enableWBS"] = $value;
    return $this;
  }
  
  public function enableWBSPredecessor($value) {
    $this->model["enableWBSPredecessor"] = $value;
    return $this;
  }
  
  public function endDateMapping($value) {
    $this->model["endDateMapping"] = $value;
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
  
  public function groupCollection($value) {
    $this->model["groupCollection"] = $value;
    return $this;
  }
  
  public function groupIdMapping($value) {
    $this->model["groupIdMapping"] = $value;
    return $this;
  }
  
  public function groupNameMapping($value) {
    $this->model["groupNameMapping"] = $value;
    return $this;
  }
  
  public function highlightNonWorkingTime($value) {
    $this->model["highlightNonWorkingTime"] = $value;
    return $this;
  }
  
  public function highlightWeekends($value) {
    $this->model["highlightWeekends"] = $value;
    return $this;
  }
  
  public function holidays($value) {
    $this->model["holidays"] = $value;
    return $this;
  }
  
  public function includeWeekend($value) {
    $this->model["includeWeekend"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function leftTaskLabelMapping($value) {
    $this->model["leftTaskLabelMapping"] = $value;
    return $this;
  }
  
  public function leftTaskLabelTemplate($value) {
    $this->model["leftTaskLabelTemplate"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function milestoneMapping($value) {
    $this->model["milestoneMapping"] = $value;
    return $this;
  }
  
  public function milestoneTemplate($value) {
    $this->model["milestoneTemplate"] = $value;
    return $this;
  }
  
  public function nonWorkingBackground($value) {
    $this->model["nonWorkingBackground"] = $value;
    return $this;
  }
  
  public function notesMapping($value) {
    $this->model["notesMapping"] = $value;
    return $this;
  }
  
  public function parentProgressbarBackground($value) {
    $this->model["parentProgressbarBackground"] = $value;
    return $this;
  }
  
  public function parentTaskIdMapping($value) {
    $this->model["parentTaskIdMapping"] = $value;
    return $this;
  }
  
  public function parentTaskbarBackground($value) {
    $this->model["parentTaskbarBackground"] = $value;
    return $this;
  }
  
  public function parentTaskbarTemplate($value) {
    $this->model["parentTaskbarTemplate"] = $value;
    return $this;
  }
  
  public function predecessorMapping($value) {
    $this->model["predecessorMapping"] = $value;
    return $this;
  }
  
  public function predecessorTooltipTemplate($value) {
    $this->model["predecessorTooltipTemplate"] = $value;
    return $this;
  }
  
  public function progressMapping($value) {
    $this->model["progressMapping"] = $value;
    return $this;
  }
  
  public function progressbarBackground($value) {
    $this->model["progressbarBackground"] = $value;
    return $this;
  }
  
  public function progressbarHeight($value) {
    $this->model["progressbarHeight"] = $value;
    return $this;
  }
  
  public function progressbarTooltipTemplate($value) {
    $this->model["progressbarTooltipTemplate"] = $value;
    return $this;
  }
  
  public function progressbarTooltipTemplateId($value) {
    $this->model["progressbarTooltipTemplateId"] = $value;
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
  
  public function renderBaseline($value) {
    $this->model["renderBaseline"] = $value;
    return $this;
  }
  
  public function resourceCollectionMapping($value) {
    $this->model["resourceCollectionMapping"] = $value;
    return $this;
  }
  
  public function resourceIdMapping($value) {
    $this->model["resourceIdMapping"] = $value;
    return $this;
  }
  
  public function resourceInfoMapping($value) {
    $this->model["resourceInfoMapping"] = $value;
    return $this;
  }
  
  public function resourceNameMapping($value) {
    $this->model["resourceNameMapping"] = $value;
    return $this;
  }
  
  public function resourceUnitMapping($value) {
    $this->model["resourceUnitMapping"] = $value;
    return $this;
  }
  
  public function resources($value) {
    $this->model["resources"] = $value;
    return $this;
  }
  
  public function rightTaskLabelMapping($value) {
    $this->model["rightTaskLabelMapping"] = $value;
    return $this;
  }
  
  public function rightTaskLabelTemplate($value) {
    $this->model["rightTaskLabelTemplate"] = $value;
    return $this;
  }
  
  public function roundOffDayworkingTime($value) {
    $this->model["roundOffDayworkingTime"] = $value;
    return $this;
  }
  
  public function rowHeight($value) {
    $this->model["rowHeight"] = $value;
    return $this;
  }
  
  public function scheduleEndDate($value) {
    $this->model["scheduleEndDate"] = $value;
    return $this;
  }
  
  public function scheduleHeaderSettings($value) {
    $this->model["scheduleHeaderSettings"] = $value;
    return $this;
  }
  
  public function scheduleStartDate($value) {
    $this->model["scheduleStartDate"] = $value;
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
  
  public function selectionType($value) {
    $this->model["selectionType"] = $value;
    return $this;
  }
  
  public function selectionMode($value) {
    $this->model["selectionMode"] = $value;
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
  
  public function showGridCellTooltip($value) {
    $this->model["showGridCellTooltip"] = $value;
    return $this;
  }
  
  public function showGridExpandCellTooltip($value) {
    $this->model["showGridExpandCellTooltip"] = $value;
    return $this;
  }
  
  public function showProgressStatus($value) {
    $this->model["showProgressStatus"] = $value;
    return $this;
  }
  
  public function showResourceNames($value) {
    $this->model["showResourceNames"] = $value;
    return $this;
  }
  
  public function showTaskNames($value) {
    $this->model["showTaskNames"] = $value;
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
  
  public function splitterPosition($value) {
    $this->model["splitterPosition"] = $value;
    return $this;
  }
  
  public function splitterSettings($value) {
    $this->model["splitterSettings"] = $value;
    return $this;
  }
  
  public function startDateMapping($value) {
    $this->model["startDateMapping"] = $value;
    return $this;
  }
  
  public function stripLines($value) {
    $this->model["stripLines"] = $value;
    return $this;
  }
  
  public function taskCollectionMapping($value) {
    $this->model["taskCollectionMapping"] = $value;
    return $this;
  }
  
  public function taskIdMapping($value) {
    $this->model["taskIdMapping"] = $value;
    return $this;
  }
  
  public function taskNameMapping($value) {
    $this->model["taskNameMapping"] = $value;
    return $this;
  }
  
  public function taskSchedulingMode($value) {
    $this->model["taskSchedulingMode"] = $value;
    return $this;
  }
  
  public function taskSchedulingModeMapping($value) {
    $this->model["taskSchedulingModeMapping"] = $value;
    return $this;
  }
  
  public function taskType($value) {
    $this->model["taskType"] = $value;
    return $this;
  }
  
  public function taskbarBackground($value) {
    $this->model["taskbarBackground"] = $value;
    return $this;
  }
  
  public function taskbarEditingTooltipTemplate($value) {
    $this->model["taskbarEditingTooltipTemplate"] = $value;
    return $this;
  }
  
  public function taskbarEditingTooltipTemplateId($value) {
    $this->model["taskbarEditingTooltipTemplateId"] = $value;
    return $this;
  }
  
  public function taskbarHeight($value) {
    $this->model["taskbarHeight"] = $value;
    return $this;
  }
  
  public function taskbarTemplate($value) {
    $this->model["taskbarTemplate"] = $value;
    return $this;
  }
  
  public function taskbarTooltipTemplate($value) {
    $this->model["taskbarTooltipTemplate"] = $value;
    return $this;
  }
  
  public function taskbarTooltipTemplateId($value) {
    $this->model["taskbarTooltipTemplateId"] = $value;
    return $this;
  }
  
  public function toolbarSettings($value) {
    $this->model["toolbarSettings"] = $value;
    return $this;
  }
  
  public function treeColumnIndex($value) {
    $this->model["treeColumnIndex"] = $value;
    return $this;
  }
  
  public function validateManualTasksOnLinking($value) {
    $this->model["validateManualTasksOnLinking"] = $value;
    return $this;
  }
  
  public function viewType($value) {
    $this->model["viewType"] = $value;
    return $this;
  }
  
  public function weekendBackground($value) {
    $this->model["weekendBackground"] = $value;
    return $this;
  }
  
  public function workMapping($value) {
    $this->model["workMapping"] = $value;
    return $this;
  }
  
  public function workUnit($value) {
    $this->model["workUnit"] = $value;
    return $this;
  }
  
  public function workWeek($value) {
    $this->model["workWeek"] = $value;
    return $this;
  }
  
  public function workingTimeScale($value) {
    $this->model["workingTimeScale"] = $value;
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
  
  public function contextMenuOpen($value) {
    $this->model["contextMenuOpen"] = $value;
    return $this;
  }
  
  public function create($value) {
    $this->model["create"] = $value;
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
  
  public function queryTaskbarInfo($value) {
    $this->model["queryTaskbarInfo"] = $value;
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
  
  public function rowSelected($value) {
    $this->model["rowSelected"] = $value;
    return $this;
  }
  
  public function rowSelecting($value) {
    $this->model["rowSelecting"] = $value;
    return $this;
  }
  
  public function splitterResized($value) {
    $this->model["splitterResized"] = $value;
    return $this;
  }
  
  public function taskbarClick($value) {
    $this->model["taskbarClick"] = $value;
    return $this;
  }
  
  public function taskbarEdited($value) {
    $this->model["taskbarEdited"] = $value;
    return $this;
  }
  
  public function taskbarEditing($value) {
    $this->model["taskbarEditing"] = $value;
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
    return "ejGantt";
  }
  
    
}
  ?>
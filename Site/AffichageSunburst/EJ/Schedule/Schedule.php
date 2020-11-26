<?php
namespace EJ;
class Schedule extends \EJ\Widget {
    
  public function allowDragAndDrop($value) {
    $this->model["allowDragAndDrop"] = $value;
    return $this;
  }
  
  public function allowInline($value) {
    $this->model["allowInline"] = $value;
    return $this;
  }
  
  public function allowDelete($value) {
    $this->model["allowDelete"] = $value;
    return $this;
  }
  
  public function allowKeyboardNavigation($value) {
    $this->model["allowKeyboardNavigation"] = $value;
    return $this;
  }
  
  public function appointmentSettings($value) {
    $this->model["appointmentSettings"] = $value;
    return $this;
  }
  
  public function appointmentTemplateId($value) {
    $this->model["appointmentTemplateId"] = $value;
    return $this;
  }
  
  public function cssClass($value) {
    $this->model["cssClass"] = $value;
    return $this;
  }
  
  public function categorizeSettings($value) {
    $this->model["categorizeSettings"] = $value;
    return $this;
  }
  
  public function cellHeight($value) {
    $this->model["cellHeight"] = $value;
    return $this;
  }
  
  public function cellWidth($value) {
    $this->model["cellWidth"] = $value;
    return $this;
  }
  
  public function contextMenuSettings($value) {
    $this->model["contextMenuSettings"] = $value;
    return $this;
  }
  
  public function currentDate($value) {
    $this->model["currentDate"] = $value;
    return $this;
  }
  
  public function currentView($value) {
    $this->model["currentView"] = $value;
    return $this;
  }
  
  public function dateFormat($value) {
    $this->model["dateFormat"] = $value;
    return $this;
  }
  
  public function showAppointmentNavigator($value) {
    $this->model["showAppointmentNavigator"] = $value;
    return $this;
  }
  
  public function enableAppointmentResize($value) {
    $this->model["enableAppointmentResize"] = $value;
    return $this;
  }
  
  public function enableLoadOnDemand($value) {
    $this->model["enableLoadOnDemand"] = $value;
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
  
  public function endHour($value) {
    $this->model["endHour"] = $value;
    return $this;
  }
  
  public function group($value) {
    $this->model["group"] = $value;
    return $this;
  }
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function workHours($value) {
    $this->model["workHours"] = $value;
    return $this;
  }
  
  public function isDST($value) {
    $this->model["isDST"] = $value;
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
  
  public function maxDate($value) {
    $this->model["maxDate"] = $value;
    return $this;
  }
  
  public function minDate($value) {
    $this->model["minDate"] = $value;
    return $this;
  }
  
  public function orientation($value) {
    $this->model["orientation"] = $value;
    return $this;
  }
  
  public function prioritySettings($value) {
    $this->model["prioritySettings"] = $value;
    return $this;
  }
  
  public function readOnly($value) {
    $this->model["readOnly"] = $value;
    return $this;
  }
  
  public function reminderSettings($value) {
    $this->model["reminderSettings"] = $value;
    return $this;
  }
  
  public function renderDates($value) {
    $this->model["renderDates"] = $value;
    return $this;
  }
  
  public function resourceHeaderTemplateId($value) {
    $this->model["resourceHeaderTemplateId"] = $value;
    return $this;
  }
  
  public function resources($value) {
    $this->model["resources"] = $value;
    return $this;
  }
  
  public function showAllDayRow($value) {
    $this->model["showAllDayRow"] = $value;
    return $this;
  }
  
  public function showWeekend($value) {
    $this->model["showWeekend"] = $value;
    return $this;
  }
  
  public function showCurrentTimeIndicator($value) {
    $this->model["showCurrentTimeIndicator"] = $value;
    return $this;
  }
  
  public function showHeaderBar($value) {
    $this->model["showHeaderBar"] = $value;
    return $this;
  }
  
  public function showLocationField($value) {
    $this->model["showLocationField"] = $value;
    return $this;
  }
  
  public function showTimeZoneFields($value) {
    $this->model["showTimeZoneFields"] = $value;
    return $this;
  }
  
  public function showQuickWindow($value) {
    $this->model["showQuickWindow"] = $value;
    return $this;
  }
  
  public function startHour($value) {
    $this->model["startHour"] = $value;
    return $this;
  }
  
  public function timeMode($value) {
    $this->model["timeMode"] = $value;
    return $this;
  }
  
  public function timeZone($value) {
    $this->model["timeZone"] = $value;
    return $this;
  }
  
  public function timeZoneCollection($value) {
    $this->model["timeZoneCollection"] = $value;
    return $this;
  }
  
  public function views($value) {
    $this->model["views"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function enableRecurrenceValidation($value) {
    $this->model["enableRecurrenceValidation"] = $value;
    return $this;
  }
  
  public function agendaViewSettings($value) {
    $this->model["agendaViewSettings"] = $value;
    return $this;
  }
  
  public function firstDayOfWeek($value) {
    $this->model["firstDayOfWeek"] = $value;
    return $this;
  }
  
  public function workWeek($value) {
    $this->model["workWeek"] = $value;
    return $this;
  }
  
  public function tooltipSettings($value) {
    $this->model["tooltipSettings"] = $value;
    return $this;
  }
  
  public function timeScale($value) {
    $this->model["timeScale"] = $value;
    return $this;
  }
  
  public function showDeleteConfirmationDialog($value) {
    $this->model["showDeleteConfirmationDialog"] = $value;
    return $this;
  }
  
  public function allDayCellsTemplateId($value) {
    $this->model["allDayCellsTemplateId"] = $value;
    return $this;
  }
  
  public function workCellsTemplateId($value) {
    $this->model["workCellsTemplateId"] = $value;
    return $this;
  }
  
  public function dateHeaderTemplateId($value) {
    $this->model["dateHeaderTemplateId"] = $value;
    return $this;
  }
  
  public function showOverflowButton($value) {
    $this->model["showOverflowButton"] = $value;
    return $this;
  }
  
  public function appointmentDragArea($value) {
    $this->model["appointmentDragArea"] = $value;
    return $this;
  }
  
  public function showNextPrevMonth($value) {
    $this->model["showNextPrevMonth"] = $value;
    return $this;
  }
  
  public function blockoutSettings($value) {
    $this->model["blockoutSettings"] = $value;
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
  
  public function appointmentClick($value) {
    $this->model["appointmentClick"] = $value;
    return $this;
  }
  
  public function beforeAppointmentRemove($value) {
    $this->model["beforeAppointmentRemove"] = $value;
    return $this;
  }
  
  public function beforeAppointmentChange($value) {
    $this->model["beforeAppointmentChange"] = $value;
    return $this;
  }
  
  public function appointmentHover($value) {
    $this->model["appointmentHover"] = $value;
    return $this;
  }
  
  public function beforeAppointmentCreate($value) {
    $this->model["beforeAppointmentCreate"] = $value;
    return $this;
  }
  
  public function appointmentWindowOpen($value) {
    $this->model["appointmentWindowOpen"] = $value;
    return $this;
  }
  
  public function beforeContextMenuOpen($value) {
    $this->model["beforeContextMenuOpen"] = $value;
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
  
  public function cellHover($value) {
    $this->model["cellHover"] = $value;
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
  
  public function drag($value) {
    $this->model["drag"] = $value;
    return $this;
  }
  
  public function dragStart($value) {
    $this->model["dragStart"] = $value;
    return $this;
  }
  
  public function dragStop($value) {
    $this->model["dragStop"] = $value;
    return $this;
  }
  
  public function menuItemClick($value) {
    $this->model["menuItemClick"] = $value;
    return $this;
  }
  
  public function navigation($value) {
    $this->model["navigation"] = $value;
    return $this;
  }
  
  public function queryCellInfo($value) {
    $this->model["queryCellInfo"] = $value;
    return $this;
  }
  
  public function reminder($value) {
    $this->model["reminder"] = $value;
    return $this;
  }
  
  public function resize($value) {
    $this->model["resize"] = $value;
    return $this;
  }
  
  public function resizeStart($value) {
    $this->model["resizeStart"] = $value;
    return $this;
  }
  
  public function resizeStop($value) {
    $this->model["resizeStop"] = $value;
    return $this;
  }
  
  public function overflowButtonClick($value) {
    $this->model["overflowButtonClick"] = $value;
    return $this;
  }
  
  public function overflowButtonHover($value) {
    $this->model["overflowButtonHover"] = $value;
    return $this;
  }
  
  public function keyDown($value) {
    $this->model["keyDown"] = $value;
    return $this;
  }
  
  public function appointmentCreated($value) {
    $this->model["appointmentCreated"] = $value;
    return $this;
  }
  
  public function appointmentChanged($value) {
    $this->model["appointmentChanged"] = $value;
    return $this;
  }
  
  public function appointmentRemoved($value) {
    $this->model["appointmentRemoved"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejSchedule";
  }
  
    
}
  ?>
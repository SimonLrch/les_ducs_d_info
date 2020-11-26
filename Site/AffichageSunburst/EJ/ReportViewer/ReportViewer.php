<?php
namespace EJ;
class ReportViewer extends \EJ\Widget {
    
  public function dataSources($value) {
    $this->model["dataSources"] = $value;
    return $this;
  }
  
  public function enablePageCache($value) {
    $this->model["enablePageCache"] = $value;
    return $this;
  }
  
  public function exportSettings($value) {
    $this->model["exportSettings"] = $value;
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
  
  public function parameters($value) {
    $this->model["parameters"] = $value;
    return $this;
  }
  
  public function parameterSettings($value) {
    $this->model["parameterSettings"] = $value;
    return $this;
  }
  
  public function printMode($value) {
    $this->model["printMode"] = $value;
    return $this;
  }
  
  public function printOption($value) {
    $this->model["printOption"] = $value;
    return $this;
  }
  
  public function processingMode($value) {
    $this->model["processingMode"] = $value;
    return $this;
  }
  
  public function renderMode($value) {
    $this->model["renderMode"] = $value;
    return $this;
  }
  
  public function reportPath($value) {
    $this->model["reportPath"] = $value;
    return $this;
  }
  
  public function reportServerUrl($value) {
    $this->model["reportServerUrl"] = $value;
    return $this;
  }
  
  public function reportServiceUrl($value) {
    $this->model["reportServiceUrl"] = $value;
    return $this;
  }
  
  public function toolbarSettings($value) {
    $this->model["toolbarSettings"] = $value;
    return $this;
  }
  
  public function zoomFactor($value) {
    $this->model["zoomFactor"] = $value;
    return $this;
  }
  
  public function serviceAuthorizationToken($value) {
    $this->model["serviceAuthorizationToken"] = $value;
    return $this;
  }
  
  public function enableParameterBlockScroller($value) {
    $this->model["enableParameterBlockScroller"] = $value;
    return $this;
  }
  
  public function enableDatasourceBlockScroller($value) {
    $this->model["enableDatasourceBlockScroller"] = $value;
    return $this;
  }
  
  public function sizeToReportContent($value) {
    $this->model["sizeToReportContent"] = $value;
    return $this;
  }
  
  public function autoRender($value) {
    $this->model["autoRender"] = $value;
    return $this;
  }
  
  public function enableNotificationBar($value) {
    $this->model["enableNotificationBar"] = $value;
    return $this;
  }
  
  public function enableDropDownSearch($value) {
    $this->model["enableDropDownSearch"] = $value;
    return $this;
  }
  
  public function enablePageVirtualization($value) {
    $this->model["enablePageVirtualization"] = $value;
    return $this;
  }
  
  public function showExceptionsInDialog($value) {
    $this->model["showExceptionsInDialog"] = $value;
    return $this;
  }
  
  public function destroy($value) {
    $this->model["destroy"] = $value;
    return $this;
  }
  
  public function drillThrough($value) {
    $this->model["drillThrough"] = $value;
    return $this;
  }
  
  public function renderingBegin($value) {
    $this->model["renderingBegin"] = $value;
    return $this;
  }
  
  public function renderingComplete($value) {
    $this->model["renderingComplete"] = $value;
    return $this;
  }
  
  public function reportError($value) {
    $this->model["reportError"] = $value;
    return $this;
  }
  
  public function reportExport($value) {
    $this->model["reportExport"] = $value;
    return $this;
  }
  
  public function reportLoaded($value) {
    $this->model["reportLoaded"] = $value;
    return $this;
  }
  
  public function showError($value) {
    $this->model["showError"] = $value;
    return $this;
  }
  
  public function viewReportClick($value) {
    $this->model["viewReportClick"] = $value;
    return $this;
  }
  
  public function exportProgressChanged($value) {
    $this->model["exportProgressChanged"] = $value;
    return $this;
  }
  
  public function printProgressChanged($value) {
    $this->model["printProgressChanged"] = $value;
    return $this;
  }
  
  public function exportItemClick($value) {
    $this->model["exportItemClick"] = $value;
    return $this;
  }
  
  public function toolbarRendering($value) {
    $this->model["toolbarRendering"] = $value;
    return $this;
  }
  
  public function toolBarItemClick($value) {
    $this->model["toolBarItemClick"] = $value;
    return $this;
  }
  
  public function hyperlink($value) {
    $this->model["hyperlink"] = $value;
    return $this;
  }
  
  public function reportPrint($value) {
    $this->model["reportPrint"] = $value;
    return $this;
  }
  
  public function ajaxBeforeLoad($value) {
    $this->model["ajaxBeforeLoad"] = $value;
    return $this;
  }
  
  public function ajaxSuccess($value) {
    $this->model["ajaxSuccess"] = $value;
    return $this;
  }
  
  public function ajaxError($value) {
    $this->model["ajaxError"] = $value;
    return $this;
  }
  
  public function parameterUpdateStateChange($value) {
    $this->model["parameterUpdateStateChange"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejReportViewer";
  }
  
    
}
  ?>
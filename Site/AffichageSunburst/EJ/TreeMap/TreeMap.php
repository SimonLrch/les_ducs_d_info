<?php
namespace EJ;
class TreeMap extends \EJ\Widget {
    
  public function borderBrush($value) {
    $this->model["borderBrush"] = $value;
    return $this;
  }
  
  public function borderThickness($value) {
    $this->model["borderThickness"] = $value;
    return $this;
  }
  
  public function uniColorMapping($value) {
    $this->model["uniColorMapping"] = $value;
    return $this;
  }
  
  public function desaturationColorMapping($value) {
    $this->model["desaturationColorMapping"] = $value;
    return $this;
  }
  
  public function paletteColorMapping($value) {
    $this->model["paletteColorMapping"] = $value;
    return $this;
  }
  
  public function colorValuePath($value) {
    $this->model["colorValuePath"] = $value;
    return $this;
  }
  
  public function colorPath($value) {
    $this->model["colorPath"] = $value;
    return $this;
  }
  
  public function dataSource($value) {
    $this->model["dataSource"] = $value;
    return $this;
  }
  
  public function dockPosition($value) {
    $this->model["dockPosition"] = $value;
    return $this;
  }
  
  public function drillDownHeaderColor($value) {
    $this->model["drillDownHeaderColor"] = $value;
    return $this;
  }
  
  public function drillDownSelectionColor($value) {
    $this->model["drillDownSelectionColor"] = $value;
    return $this;
  }
  
  public function isHierarchicalDatasource($value) {
    $this->model["isHierarchicalDatasource"] = $value;
    return $this;
  }
  
  public function header($value) {
    $this->model["header"] = $value;
    return $this;
  }
  
  public function enableDrillDown($value) {
    $this->model["enableDrillDown"] = $value;
    return $this;
  }
  
  public function drillDownValue($value) {
    $this->model["drillDownValue"] = $value;
    return $this;
  }
  
  public function drillDownLevel($value) {
    $this->model["drillDownLevel"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function enableResize($value) {
    $this->model["enableResize"] = $value;
    return $this;
  }
  
  public function draggingOnSelection($value) {
    $this->model["draggingOnSelection"] = $value;
    return $this;
  }
  
  public function draggingGroupOnSelection($value) {
    $this->model["draggingGroupOnSelection"] = $value;
    return $this;
  }
  
  public function groupColorMapping($value) {
    $this->model["groupColorMapping"] = $value;
    return $this;
  }
  
  public function legendSettings($value) {
    $this->model["legendSettings"] = $value;
    return $this;
  }
  
  public function highlightBorderBrush($value) {
    $this->model["highlightBorderBrush"] = $value;
    return $this;
  }
  
  public function highlightBorderThickness($value) {
    $this->model["highlightBorderThickness"] = $value;
    return $this;
  }
  
  public function highlightGroupBorderBrush($value) {
    $this->model["highlightGroupBorderBrush"] = $value;
    return $this;
  }
  
  public function highlightGroupBorderThickness($value) {
    $this->model["highlightGroupBorderThickness"] = $value;
    return $this;
  }
  
  public function highlightGroupOnSelection($value) {
    $this->model["highlightGroupOnSelection"] = $value;
    return $this;
  }
  
  public function highlightOnSelection($value) {
    $this->model["highlightOnSelection"] = $value;
    return $this;
  }
  
  public function itemsLayoutMode($value) {
    $this->model["itemsLayoutMode"] = $value;
    return $this;
  }
  
  public function enableGroupSeparator($value) {
    $this->model["enableGroupSeparator"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function leafItemSettings($value) {
    $this->model["leafItemSettings"] = $value;
    return $this;
  }
  
  public function rangeColorMapping($value) {
    $this->model["rangeColorMapping"] = $value;
    return $this;
  }
  
  public function selectionMode($value) {
    $this->model["selectionMode"] = $value;
    return $this;
  }
  
  public function groupSelectionMode($value) {
    $this->model["groupSelectionMode"] = $value;
    return $this;
  }
  
  public function showLegend($value) {
    $this->model["showLegend"] = $value;
    return $this;
  }
  
  public function enableGradient($value) {
    $this->model["enableGradient"] = $value;
    return $this;
  }
  
  public function showTooltip($value) {
    $this->model["showTooltip"] = $value;
    return $this;
  }
  
  public function tooltipTemplate($value) {
    $this->model["tooltipTemplate"] = $value;
    return $this;
  }
  
  public function treeMapItems($value) {
    $this->model["treeMapItems"] = $value;
    return $this;
  }
  
  public function levels($value) {
    $this->model["levels"] = $value;
    return $this;
  }
  
  public function weightValuePath($value) {
    $this->model["weightValuePath"] = $value;
    return $this;
  }
  
  public function treeMapItemSelected($value) {
    $this->model["treeMapItemSelected"] = $value;
    return $this;
  }
  
  public function itemRendering($value) {
    $this->model["itemRendering"] = $value;
    return $this;
  }
  
  public function legendItemRendering($value) {
    $this->model["legendItemRendering"] = $value;
    return $this;
  }
  
  public function drillStarted($value) {
    $this->model["drillStarted"] = $value;
    return $this;
  }
  
  public function drillDownItemSelected($value) {
    $this->model["drillDownItemSelected"] = $value;
    return $this;
  }
  
  public function headerTemplateRendering($value) {
    $this->model["headerTemplateRendering"] = $value;
    return $this;
  }
  
  public function refreshed($value) {
    $this->model["refreshed"] = $value;
    return $this;
  }
  
  public function treeMapGroupSelected($value) {
    $this->model["treeMapGroupSelected"] = $value;
    return $this;
  }
  
  public function Click($value) {
    $this->model["Click"] = $value;
    return $this;
  }
  
  public function doubleClick($value) {
    $this->model["doubleClick"] = $value;
    return $this;
  }
  
  public function rightClick($value) {
    $this->model["rightClick"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejTreeMap";
  }
  
    
}
  ?>
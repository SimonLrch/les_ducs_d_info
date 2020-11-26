<?php
namespace EJ;
class Chart extends \EJ\Widget {
    
  public function annotations($value) {
    $this->model["annotations"] = $value;
    return $this;
  }
  
  public function background($value) {
    $this->model["background"] = $value;
    return $this;
  }
  
  public function backGroundImageUrl($value) {
    $this->model["backGroundImageUrl"] = $value;
    return $this;
  }
  
  public function border($value) {
    $this->model["border"] = $value;
    return $this;
  }
  
  public function exportSettings($value) {
    $this->model["exportSettings"] = $value;
    return $this;
  }
  
  public function chartArea($value) {
    $this->model["chartArea"] = $value;
    return $this;
  }
  
  public function columnDefinitions($value) {
    $this->model["columnDefinitions"] = $value;
    return $this;
  }
  
  public function commonSeriesOptions($value) {
    $this->model["commonSeriesOptions"] = $value;
    return $this;
  }
  
  public function selectedDataPointIndexes($value) {
    $this->model["selectedDataPointIndexes"] = $value;
    return $this;
  }
  
  public function crosshair($value) {
    $this->model["crosshair"] = $value;
    return $this;
  }
  
  public function depth($value) {
    $this->model["depth"] = $value;
    return $this;
  }
  
  public function enable3D($value) {
    $this->model["enable3D"] = $value;
    return $this;
  }
  
  public function enableCanvasRendering($value) {
    $this->model["enableCanvasRendering"] = $value;
    return $this;
  }
  
  public function initSeriesRender($value) {
    $this->model["initSeriesRender"] = $value;
    return $this;
  }
  
  public function enableRotation($value) {
    $this->model["enableRotation"] = $value;
    return $this;
  }
  
  public function indicators($value) {
    $this->model["indicators"] = $value;
    return $this;
  }
  
  public function isResponsive($value) {
    $this->model["isResponsive"] = $value;
    return $this;
  }
  
  public function legend($value) {
    $this->model["legend"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function palette($value) {
    $this->model["palette"] = $value;
    return $this;
  }
  
  public function margin($value) {
    $this->model["margin"] = $value;
    return $this;
  }
  
  public function perspectiveAngle($value) {
    $this->model["perspectiveAngle"] = $value;
    return $this;
  }
  
  public function primaryXAxis($value) {
    $this->model["primaryXAxis"] = $value;
    return $this;
  }
  
  public function axes($value) {
    $this->model["axes"] = $value;
    return $this;
  }
  
  public function primaryYAxis($value) {
    $this->model["primaryYAxis"] = $value;
    return $this;
  }
  
  public function rotation($value) {
    $this->model["rotation"] = $value;
    return $this;
  }
  
  public function rowDefinitions($value) {
    $this->model["rowDefinitions"] = $value;
    return $this;
  }
  
  public function series($value) {
    $this->model["series"] = $value;
    return $this;
  }
  
  public function sideBySideSeriesPlacement($value) {
    $this->model["sideBySideSeriesPlacement"] = $value;
    return $this;
  }
  
  public function size($value) {
    $this->model["size"] = $value;
    return $this;
  }
  
  public function theme($value) {
    $this->model["theme"] = $value;
    return $this;
  }
  
  public function tilt($value) {
    $this->model["tilt"] = $value;
    return $this;
  }
  
  public function title($value) {
    $this->model["title"] = $value;
    return $this;
  }
  
  public function wallSize($value) {
    $this->model["wallSize"] = $value;
    return $this;
  }
  
  public function zooming($value) {
    $this->model["zooming"] = $value;
    return $this;
  }
  
  public function animationComplete($value) {
    $this->model["animationComplete"] = $value;
    return $this;
  }
  
  public function axesLabelRendering($value) {
    $this->model["axesLabelRendering"] = $value;
    return $this;
  }
  
  public function axesLabelsInitialize($value) {
    $this->model["axesLabelsInitialize"] = $value;
    return $this;
  }
  
  public function axesRangeCalculate($value) {
    $this->model["axesRangeCalculate"] = $value;
    return $this;
  }
  
  public function axesTitleRendering($value) {
    $this->model["axesTitleRendering"] = $value;
    return $this;
  }
  
  public function chartAreaBoundsCalculate($value) {
    $this->model["chartAreaBoundsCalculate"] = $value;
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
  
  public function displayTextRendering($value) {
    $this->model["displayTextRendering"] = $value;
    return $this;
  }
  
  public function legendBoundsCalculate($value) {
    $this->model["legendBoundsCalculate"] = $value;
    return $this;
  }
  
  public function legendItemClick($value) {
    $this->model["legendItemClick"] = $value;
    return $this;
  }
  
  public function legendItemMouseMove($value) {
    $this->model["legendItemMouseMove"] = $value;
    return $this;
  }
  
  public function legendItemRendering($value) {
    $this->model["legendItemRendering"] = $value;
    return $this;
  }
  
  public function load($value) {
    $this->model["load"] = $value;
    return $this;
  }
  
  public function zoomed($value) {
    $this->model["zoomed"] = $value;
    return $this;
  }
  
  public function rangeSelected($value) {
    $this->model["rangeSelected"] = $value;
    return $this;
  }
  
  public function pointRegionClick($value) {
    $this->model["pointRegionClick"] = $value;
    return $this;
  }
  
  public function pointRegionMouseMove($value) {
    $this->model["pointRegionMouseMove"] = $value;
    return $this;
  }
  
  public function preRender($value) {
    $this->model["preRender"] = $value;
    return $this;
  }
  
  public function seriesRegionClick($value) {
    $this->model["seriesRegionClick"] = $value;
    return $this;
  }
  
  public function seriesRendering($value) {
    $this->model["seriesRendering"] = $value;
    return $this;
  }
  
  public function symbolRendering($value) {
    $this->model["symbolRendering"] = $value;
    return $this;
  }
  
  public function titleRendering($value) {
    $this->model["titleRendering"] = $value;
    return $this;
  }
  
  public function toolTipInitialize($value) {
    $this->model["toolTipInitialize"] = $value;
    return $this;
  }
  
  public function trackAxisToolTip($value) {
    $this->model["trackAxisToolTip"] = $value;
    return $this;
  }
  
  public function trackToolTip($value) {
    $this->model["trackToolTip"] = $value;
    return $this;
  }
  
  public function axisLabelClick($value) {
    $this->model["axisLabelClick"] = $value;
    return $this;
  }
  
  public function axisLabelMouseMove($value) {
    $this->model["axisLabelMouseMove"] = $value;
    return $this;
  }
  
  public function chartClick($value) {
    $this->model["chartClick"] = $value;
    return $this;
  }
  
  public function multiLevelLabelClick($value) {
    $this->model["multiLevelLabelClick"] = $value;
    return $this;
  }
  
  public function chartMouseMove($value) {
    $this->model["chartMouseMove"] = $value;
    return $this;
  }
  
  public function chartDoubleClick($value) {
    $this->model["chartDoubleClick"] = $value;
    return $this;
  }
  
  public function chartMouseLeave($value) {
    $this->model["chartMouseLeave"] = $value;
    return $this;
  }
  
  public function annotationClick($value) {
    $this->model["annotationClick"] = $value;
    return $this;
  }
  
  public function afterResize($value) {
    $this->model["afterResize"] = $value;
    return $this;
  }
  
  public function beforeResize($value) {
    $this->model["beforeResize"] = $value;
    return $this;
  }
  
  public function errorBarRendering($value) {
    $this->model["errorBarRendering"] = $value;
    return $this;
  }
  
  public function multiLevelLabelRendering($value) {
    $this->model["multiLevelLabelRendering"] = $value;
    return $this;
  }
  
  public function trendlineRendering($value) {
    $this->model["trendlineRendering"] = $value;
    return $this;
  }
  
  public function scrollChanged($value) {
    $this->model["scrollChanged"] = $value;
    return $this;
  }
  
  public function scrollStart($value) {
    $this->model["scrollStart"] = $value;
    return $this;
  }
  
  public function scrollEnd($value) {
    $this->model["scrollEnd"] = $value;
    return $this;
  }
  
  public function dragStart($value) {
    $this->model["dragStart"] = $value;
    return $this;
  }
  
  public function dragging($value) {
    $this->model["dragging"] = $value;
    return $this;
  }
  
  public function dragEnd($value) {
    $this->model["dragEnd"] = $value;
    return $this;
  }
  
  public function subTitleRendering($value) {
    $this->model["subTitleRendering"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('div') ;
  }
  
  protected function PluginName() {
    return "ejChart";
  }
  
    
}
  ?>
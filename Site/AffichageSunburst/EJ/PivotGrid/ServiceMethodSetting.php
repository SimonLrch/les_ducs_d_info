<?php
namespace EJ\PivotGrid;
class ServiceMethodSetting {
    
  public function drillDown ($value) {
    $this -> drillDown = $value;
    return $this;
  }
  
  public function exportPivotGrid ($value) {
    $this -> exportPivotGrid = $value;
    return $this;
  }
  
  public function deferUpdate ($value) {
    $this -> deferUpdate = $value;
    return $this;
  }
  
  public function fetchMembers ($value) {
    $this -> fetchMembers = $value;
    return $this;
  }
  
  public function filtering ($value) {
    $this -> filtering = $value;
    return $this;
  }
  
  public function initialize ($value) {
    $this -> initialize = $value;
    return $this;
  }
  
  public function nodeDropped ($value) {
    $this -> nodeDropped = $value;
    return $this;
  }
  
  public function nodeStateModified ($value) {
    $this -> nodeStateModified = $value;
    return $this;
  }
  
  public function paging ($value) {
    $this -> paging = $value;
    return $this;
  }
  
  public function sorting ($value) {
    $this -> sorting = $value;
    return $this;
  }
  
  public function memberExpand ($value) {
    $this -> memberExpand = $value;
    return $this;
  }
  
  public function cellEditing ($value) {
    $this -> cellEditing = $value;
    return $this;
  }
  
  public function saveReport ($value) {
    $this -> saveReport = $value;
    return $this;
  }
  
  public function loadReport ($value) {
    $this -> loadReport = $value;
    return $this;
  }
  
  public function calculatedField ($value) {
    $this -> calculatedField = $value;
    return $this;
  }
  
  public function drillThroughHierarchies ($value) {
    $this -> drillThroughHierarchies = $value;
    return $this;
  }
  
  public function drillThroughDataTable ($value) {
    $this -> drillThroughDataTable = $value;
    return $this;
  }
  
  public function valueSorting ($value) {
    $this -> valueSorting = $value;
    return $this;
  }
  
  public function removeButton ($value) {
    $this -> removeButton = $value;
    return $this;
  }
  
  public function writeBack ($value) {
    $this -> writeBack = $value;
    return $this;
  }
  
}
  ?>
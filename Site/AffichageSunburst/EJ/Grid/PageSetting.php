<?php
namespace EJ\Grid;
class PageSetting {
    
  public function currentPage ($value) {
    $this -> currentPage = $value;
    return $this;
  }
  
  public function enableQueryString ($value) {
    $this -> enableQueryString = $value;
    return $this;
  }
  
  public function enableTemplates ($value) {
    $this -> enableTemplates = $value;
    return $this;
  }
  
  public function pageCount ($value) {
    $this -> pageCount = $value;
    return $this;
  }
  
  public function pageSize ($value) {
    $this -> pageSize = $value;
    return $this;
  }
  
  public function pageSizeList ($value) {
    $this -> pageSizeList = $value;
    return $this;
  }
  
  public function showDefaults ($value) {
    $this -> showDefaults = $value;
    return $this;
  }
  
  public function template ($value) {
    $this -> template = $value;
    return $this;
  }
  
  public function totalPages ($value) {
    $this -> totalPages = $value;
    return $this;
  }
  
  public function totalRecordsCount ($value) {
    $this -> totalRecordsCount = $value;
    return $this;
  }
  
  public function printMode ($value) {
    $this -> printMode = $value;
    return $this;
  }
  
}
  ?>
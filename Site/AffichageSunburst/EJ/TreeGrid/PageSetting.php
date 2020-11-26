<?php
namespace EJ\TreeGrid;
class PageSetting {
    
  public function currentPage ($value) {
    $this -> currentPage = $value;
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
  
  public function pageSizeMode ($value) {
    $this -> pageSizeMode = $value;
    return $this;
  }
  
  public function printMode ($value) {
    $this -> printMode = $value;
    return $this;
  }
  
  public function template ($value) {
    $this -> template = $value;
    return $this;
  }
  
  public function totalRecordsCount ($value) {
    $this -> totalRecordsCount = $value;
    return $this;
  }
  
}
  ?>
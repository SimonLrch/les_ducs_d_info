<?php
namespace EJ\Spreadsheet;
class ExportSetting {
    
  public function allowExporting ($value) {
    $this -> allowExporting = $value;
    return $this;
  }
  
  public function enableFormulaCalculation ($value) {
    $this -> enableFormulaCalculation = $value;
    return $this;
  }
  
  public function csvUrl ($value) {
    $this -> csvUrl = $value;
    return $this;
  }
  
  public function excelUrl ($value) {
    $this -> excelUrl = $value;
    return $this;
  }
  
  public function password ($value) {
    $this -> password = $value;
    return $this;
  }
  
  public function pdfUrl ($value) {
    $this -> pdfUrl = $value;
    return $this;
  }
  
}
  ?>
<?php
namespace EJ;
class Autocomplete extends \EJ\Widget {
    
  public function addNewText($value) {
    $this->model["addNewText"] = $value;
    return $this;
  }
  
  public function allowAddNew($value) {
    $this->model["allowAddNew"] = $value;
    return $this;
  }
  
  public function allowSorting($value) {
    $this->model["allowSorting"] = $value;
    return $this;
  }
  
  public function animateType($value) {
    $this->model["animateType"] = $value;
    return $this;
  }
  
  public function autoFocus($value) {
    $this->model["autoFocus"] = $value;
    return $this;
  }
  
  public function caseSensitiveSearch($value) {
    $this->model["caseSensitiveSearch"] = $value;
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
  
  public function delaySuggestionTimeout($value) {
    $this->model["delaySuggestionTimeout"] = $value;
    return $this;
  }
  
  public function delimiterChar($value) {
    $this->model["delimiterChar"] = $value;
    return $this;
  }
  
  public function emptyResultText($value) {
    $this->model["emptyResultText"] = $value;
    return $this;
  }
  
  public function enableAutoFill($value) {
    $this->model["enableAutoFill"] = $value;
    return $this;
  }
  
  public function enabled($value) {
    $this->model["enabled"] = $value;
    return $this;
  }
  
  public function enableDistinct($value) {
    $this->model["enableDistinct"] = $value;
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
  
  public function fields($value) {
    $this->model["fields"] = $value;
    return $this;
  }
  
  public function filterType($value) {
    $this->model["filterType"] = $value;
    return $this;
  }
  
  public function height($value) {
    $this->model["height"] = $value;
    return $this;
  }
  
  public function highlightSearch($value) {
    $this->model["highlightSearch"] = $value;
    return $this;
  }
  
  public function itemsCount($value) {
    $this->model["itemsCount"] = $value;
    return $this;
  }
  
  public function ignoreAccent($value) {
    $this->model["ignoreAccent"] = $value;
    return $this;
  }
  
  public function locale($value) {
    $this->model["locale"] = $value;
    return $this;
  }
  
  public function minCharacter($value) {
    $this->model["minCharacter"] = $value;
    return $this;
  }
  
  public function multiColumnSettings($value) {
    $this->model["multiColumnSettings"] = $value;
    return $this;
  }
  
  public function multiSelectMode($value) {
    $this->model["multiSelectMode"] = $value;
    return $this;
  }
  
  public function popupHeight($value) {
    $this->model["popupHeight"] = $value;
    return $this;
  }
  
  public function popupWidth($value) {
    $this->model["popupWidth"] = $value;
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
  
  public function selectValueByKey($value) {
    $this->model["selectValueByKey"] = $value;
    return $this;
  }
  
  public function showEmptyResultText($value) {
    $this->model["showEmptyResultText"] = $value;
    return $this;
  }
  
  public function showLoadingIcon($value) {
    $this->model["showLoadingIcon"] = $value;
    return $this;
  }
  
  public function showPopupButton($value) {
    $this->model["showPopupButton"] = $value;
    return $this;
  }
  
  public function showRoundedCorner($value) {
    $this->model["showRoundedCorner"] = $value;
    return $this;
  }
  
  public function showResetIcon($value) {
    $this->model["showResetIcon"] = $value;
    return $this;
  }
  
  public function sortOrder($value) {
    $this->model["sortOrder"] = $value;
    return $this;
  }
  
  public function template($value) {
    $this->model["template"] = $value;
    return $this;
  }
  
  public function validationMessage($value) {
    $this->model["validationMessage"] = $value;
    return $this;
  }
  
  public function validationRules($value) {
    $this->model["validationRules"] = $value;
    return $this;
  }
  
  public function value($value) {
    $this->model["value"] = $value;
    return $this;
  }
  
  public function visible($value) {
    $this->model["visible"] = $value;
    return $this;
  }
  
  public function watermarkText($value) {
    $this->model["watermarkText"] = $value;
    return $this;
  }
  
  public function width($value) {
    $this->model["width"] = $value;
    return $this;
  }
  
  public function actionBegin($value) {
    $this->model["actionBegin"] = $value;
    return $this;
  }
  
  public function actionSuccess($value) {
    $this->model["actionSuccess"] = $value;
    return $this;
  }
  
  public function actionComplete($value) {
    $this->model["actionComplete"] = $value;
    return $this;
  }
  
  public function actionFailure($value) {
    $this->model["actionFailure"] = $value;
    return $this;
  }
  
  public function change($value) {
    $this->model["change"] = $value;
    return $this;
  }
  
  public function close($value) {
    $this->model["close"] = $value;
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
  
  public function focusIn($value) {
    $this->model["focusIn"] = $value;
    return $this;
  }
  
  public function focusOut($value) {
    $this->model["focusOut"] = $value;
    return $this;
  }
  
  public function open($value) {
    $this->model["open"] = $value;
    return $this;
  }
  
  public function select($value) {
    $this->model["select"] = $value;
    return $this;
  }
  
    
  protected function tagName() {
    return  new \EJ\HtmlTag('input') ;
  }
  
  protected function PluginName() {
    return "ejAutocomplete";
  }
  
    
}
  ?>
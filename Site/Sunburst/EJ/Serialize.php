<?php

namespace EJ;

abstract class Serialize{
    protected $model = array();
    protected $attributes = array();
    protected $isControl = false;
    
    
    protected function serialize(){
        $json = array();
        $this->serializeModel($json, $this->model);
        return stripslashes(implode($json)); 

    }
    protected function add($key, $items)
    {
        $collections = array();
        if (array_key_exists($key, $this)) {
            $collections = $this->$key;
        }
        foreach($items as $item) {
            $collections[] = $item;
        }
        $this->$key = $collections;
        return $this;
    }
    protected function formJSON(array &$json, $array){
        $CSSPropertyList = array("backgroundColor"=>"background-color","fontWeight"=>"font-weight");
        $json[] = '{';
        foreach ($array as $key => $value) {
            $json[] = '"';
            foreach($CSSPropertyList as $CSSKey => $CSSValue){
                if($this instanceof \EJ\Spreadsheet && $CSSKey === $key){
                    $key = $CSSValue;
                }
            }
            $json[] = $key;
            $json[] = '":';
            $this->serializeModel($json,$value);
            $json[] = ',';
        }

        if (end($json) == ',') {
            array_pop($json);
        }

        $json[] = '}';
    }

    private function serializeArray(array &$json, array $array) {
        $json[] = '[';

        $length = count($array);

        for ($index = 0; $index < $length; $index++) {
            $this->serializeModel($json, $array[$index]);

            if ($index < $length - 1) {
                $json[] = ',';
            }
        }

        $json[] = ']';
    }
    private function is_arrayType(array $array) {
        return (bool)count(array_filter(array_keys($array), 'is_string'));
    }
    private function formQuery(array &$json,$array)
    {
        foreach ($array as $key => $value) {
            $json[] = '.';
            $json[] = $key;
            $json[] = '(';
            if($key === "where"){
                $list = explode(",",$value);
                $length = count($list);
                for ($index = 0; $index < $length; $index++) {
                    $json[] = $list[$index];
                    $json[] = ',';
                }
                if (end($json) == ',') {
                    array_pop($json);
                }
            }else{
                $this->serializeModel($json,$value);
            }
            $json[] = ')';
        }

    }
    private function formJS(array &$json,$array){
        $CSSPropertyList = array("backgroundColor"=>"background-color","fontWeight"=>"font-weight");
        if(is_string($array) || is_numeric($array) || is_bool($array)){
            $json[] = json_encode($array, JSON_UNESCAPED_UNICODE);
        }else{
            $json[] = '{';
            foreach($array as $key=>$value){
                $json[] = '"';
                foreach($CSSPropertyList as $CSSKey => $CSSValue){
                    if($this instanceof \EJ\Spreadsheet && $CSSKey === $key){
                        $key = $CSSValue;
                    }
                }
                $json[] = $key;
                $json[] = '":';
                $this->serializeModel($json,$value);
                $json[] = ',';
            }
            if (end($json) == ',') {
                array_pop($json);
            }
            $json[] = '}';
        }
    }
    private function serializeDateTimeObject(array &$json, $value) {
        $json[] = 'new Date(';
        $json[] =  $value->getTimestamp() * 1000;
        $json[] = ')';
    }
    private function serializeModel(array &$json, $value) {
        $manager="ej.DataManager";
        $query ="ej.Query()";
        if ($value instanceof \EJ\DataManager) {
            $json[] = $manager;
            $json[] = "(";
            $this->formJSON($json, $value->model);
            $json[] = ")";
        }
        else if ($value instanceof \EJ\Query) {
            $json[] = $query;
            $this->formQuery($json, $value->model);
        }
        else if ($value instanceof \DateTime) {
            $this->serializeDateTimeObject($json, $value);
        }
        else if (is_array($value)) {
            if ($this->is_arrayType($value) || empty($value)) {
                $this->formJSON($json, $value);
            } else {
                $this->serializeArray($json, $value);
            }
        }
        else if($value === null){
            $json[] = 'null';
        } 
        else {
            $this->formJS($json, $value);
        }
    }
}
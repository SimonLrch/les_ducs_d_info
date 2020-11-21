<?php
  spl_autoload_register(function ($class) {
      if (strpos($class, "EJ\\") === 0) {
          $rootFolder = explode("\\",$class);
          $class = str_replace('EJ', "", $class);
          $path =  $class;
          if((count($rootFolder) == 2) && file_exists(str_replace('\\', '/', __DIR__.$class.$path).'.php'))
            $path = str_replace('\\', '/', __DIR__.$class.$path).'.php';
          else
            $path = str_replace('\\', '/', __DIR__.$path).'.php';

         require_once $path;
        
      }
  });
  ?>
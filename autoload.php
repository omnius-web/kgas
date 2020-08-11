<?php
spl_autoload_register(function($path){
  $path = str_replace('\\', '/', $path);
  $path = G5_PATH.'/om_lib/'.$path.'.php';
  //print("path : {$path}");
  require_once $path;
});

?>

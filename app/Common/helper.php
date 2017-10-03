<?php

namespace App\Common;

function get_unity_path(){
  
  switch (PHP_OS){
    case "Darwin":
      return config("unity.mac.unity_path");
    case "WINNT":
      return config("unity.windows.unity_path");
    default :
      return config("unity.windows.unity_path");
  }
  
  
}

function is_running(){
    
    
}
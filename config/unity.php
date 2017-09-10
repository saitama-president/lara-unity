<?php

return [
  "mac"=>[
    "unity_path"=>env('UNITY_PATH', '/Applications/Unity/Unity.app/Contents/MacOS/Unity'),
  ],
  "windows"=>[
    "unity_path"=>env('UNITY_PATH', '/Applications/Unity/Unity.app/Contents/MacOS/Unity'),
  ],
  "serial"=>env("UNITY_SERIAL",""),
  "username"=>env("UNITY_USERNAME",""),
  "passwprd"=>env("UNITY_PASSWORD",""),
  
];

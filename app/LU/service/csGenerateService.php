<?php
namespace App\LU\service;

class csGenerateService {
    //put your code here
    
    public function GenerateCSSource(        
        $class_name,
        $namespace="LU.API",
        $extend="MonoBehaviour",
        $usings=[
            "System",
            "System.Collections",
            "System.Collections.Generic",
            "UnityEngine"
        ],
        $implements=[
            
        ]){
        
        
        
        return view("unity.cs",[
            "class_name"=>$class_name,
            "usings"=>$usings,
            "namespace"=>$namespace,
            "implements"=> implode(",",array_merge([$extend],$implements)) 
        ])->render();
    }
    
    public function GenerateAPISource(\App\LU\data\API $api){
        
        
    }
}

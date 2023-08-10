<?php

class Route{
    public function getAction($method){
        if($method == "GET"){
            return "index";
        }else if($method == "POST"){
            return "add";
        }else if($method == "PUT"){
            return "change";
        }else if($method == "DELETE"){
            return "delete";
        }else {
            die($method . " not supported.");
        }
    }

    public function handleUrl(){
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $requestUrl = $_SERVER['REQUEST_URI'];
        $parts = parse_url($requestUrl);

        $path= $parts["path"];
        $pathArr= explode("/",$path);

        $module = empty($pathArr[1]) ? "home" : $pathArr[1];
        $action = $this->getAction($requestMethod);
        $detail = $pathArr[2];

        $query=$parts["query"];
        $query= isset($query) ? explode("&",$query) : array();



        return array(
            "action"=>$action,
            "module"=>$module,
            "detail"=>$detail,
            "query"=>$query
        );

    }
}
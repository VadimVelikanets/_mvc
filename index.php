<?php

// var_dump($_SERVER);
$parts = explode('/', $_SERVER['REQUEST_URI']);


$controllerName = $parts[2];
@$actionName = $parts[3];
$controllerFileName = ucfirst($controllerName);

if($controllerName == ''){
    include "Controller/Main.php";
   // include "Templates/Main.php";
    $mainObj = new Main();
    $mainObj->mainAction();
    $mainObj->uploadAction();
    die;
}

@include "Controller/$controllerFileName.php";
$actionFuncName = $actionName . 'Action';


if (!method_exists($controllerName, $actionFuncName)) {
    include '404.php';
    die;
}
$controllerObj = new $controllerName();
//var_dump($controllerObj);


@$tpl =  'Templates' . '/' . $controllerFileName  . '.php';
include 'View.php';
$view = new View();
$controllerObj->view = $view;
$controllerObj->$actionFuncName();
$view->render($tpl);
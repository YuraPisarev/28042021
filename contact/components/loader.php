<?php


function load(string $url)
{
    session_start();

    $url = cleanUrl($url);

    security($url);

    $part = getUrlParst($url);


    $controllerName = array_shift($part);
    require_once getControllerFile($controllerName);

    $actionName = array_shift($part);
    getActionFunction($actionName)();

}

function getUrlParst(string $url): array
{

    $part = explode('/', $url);
    return array_filter($part);
}

function cleanUrl(string $url): string
{
    return preg_replace('/\\?.*/','' ,$url);
}

function getControllerFile(string $controllerName): string
{

    $controllerName = camelize($controllerName);
    $controllerName = "{$controllerName}Controller.php";
    $controllerFile = config('controllersRout') . '/' . $controllerName;

    if (!file_exists($controllerFile)){
        exit('Controller do not exist');
    }

    return $controllerFile;
}

function getActionFunction(string $actionName): string
{


    $actionName = camelize($actionName);
    $actionFunction = "action{$actionName}";

    if (!function_exists($actionFunction)){
        exit('Action do not exist');
    }
    return $actionFunction;
}
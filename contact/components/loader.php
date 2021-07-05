<?php
//var_dump($_SERVER['REQUEST_URI']);

function load(string $url)
{
    session_start();

    $url = cleanUrl($url);

    security($url);

    $part = getUrlParst($url);

    require_once getControllerFile($part);

    getActionFunction($part)();

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

function getControllerFile(array &$part): string
{
    $controllerName = array_shift($part);
    $controllerName = camelize($controllerName);
    $controllerName = "{$controllerName}Controller.php";
    $controllerFile = config('controllersRout') . '/' . $controllerName;

    if (!file_exists($controllerFile)){
        exit('Controller do not exist');
    }

    return $controllerFile;
}

function getActionFunction(array &$part): string
{

    $actionName = array_shift($part);
    $actionName = camelize($actionName);
    $actionFunction = "action{$actionName}";

    if (!function_exists($actionFunction)){
        exit('Action do not exist');
    }
    return $actionFunction;
}
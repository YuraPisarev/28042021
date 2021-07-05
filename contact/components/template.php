<?php

function render(string $template, array $variables = [], string $layout = 'main')
{
    extract($variables, EXTR_PREFIX_SAME, config('ExistedVariablesPrefix'));
    $file = config('viewRout') . '/' . $template . '.php';
    if (!file_exists($file)){
        exit('Template do not exist');
    }

    ob_start();
    require $file;
    $content = ob_get_clean();

    $layout = config('LayoutsRout'). '/' . $layout . '.php';
    if (!file_exists($layout)){
        exit('Layout do not exist');
    }


    require $layout;
}
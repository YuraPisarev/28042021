<?php

namespace cli\controllers;

use components\AbstractController;

class ChatController extends AbstractController
{
    public function actionRaw()
    {
        \App::get()->template()?->render('test');
    }
}
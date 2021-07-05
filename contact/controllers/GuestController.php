<?php

function actionLogin()
{
    render('guest/login');
}
function actionRegistration()
{
    render('guest/registration', [], 'guest');
}

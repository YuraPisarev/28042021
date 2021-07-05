<?php

function security(string $url)
{
    $isGuest = empty($_SESSION['user']);
    $guestAction = config('guestAction');
    if ($isGuest && !in_array($url, config('guestAction'), true)) {
        redirect(config('loginUrl'));
    }
}

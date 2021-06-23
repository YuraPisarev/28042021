<?php
function error(string $location, string $message): void
{
    $separator = str_contains($location, '?') ? '&' : '?';
    redirect("{$location}{$separator}error_message={$message}");

}
function success(string $location, string $message): void
{
    $separator = str_contains($location, '?') ? '&' : '?';
    redirect("{$location}{$separator}error_message={$message}");

}
function redirect(string $location, string $message): void
{
    header("Location: {$location}");
    exit;
}

function getSeparator(string $location) : string
{
    return str_contains($location, '?') ? '&' : '?';
}
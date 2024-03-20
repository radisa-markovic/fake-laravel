<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIsActive($url)
{
    return parse_url($_SERVER['REQUEST_URI'])['path'] === $url;
}
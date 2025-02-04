<?php

function dd($value = null)
{
    if (!is_null($value)) {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
    }
    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function sum($a, $b, $dbg = false)
{
    if ($dbg) {
        echo "<pre>";
        var_dump($a);
        var_dump($b);
        echo "</pre>";
    }
    echo $a + $b;
}

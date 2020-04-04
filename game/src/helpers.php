<?php

function camelCase($value)
{
    $result = ucwords(str_replace('_', ' ', $value));

    return str_replace(' ','', $result);
}
<?php

function input(String $info): string
{
    echo "$info";
    $input = fgets(STDIN);
    return trim($input);

}
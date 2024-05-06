<?php
// Return statements without argument in functions which declare a return type
// will fail at compile time

function sum(?int $a, ?int $b) : int
{
    if (false){
        return ;
    }
    return $a + $b;
}

//sum();
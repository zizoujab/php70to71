<?php
// Empty index operator [] operator not supported for strings
$a="";
$a[] = "hello world";
var_dump($a);
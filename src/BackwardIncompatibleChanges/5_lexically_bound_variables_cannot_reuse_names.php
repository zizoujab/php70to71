<?php
// Variables bound to a closure via the use construct cannot use the
// same name as any superglobals, $this, or any parameter.
// this will not rise an error in PHP7.0 but will not work on PHP7.1
//$f = function () use ($_SERVER) {};
$f = function ($param) use ($param) {};

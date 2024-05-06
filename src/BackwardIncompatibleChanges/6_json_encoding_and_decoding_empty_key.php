<?php
// Decoding an empty key now results in an empty property name, rather than _empty_ as a property name.
// no more _empty_ as property name
var_dump(json_decode(json_encode(['' => 1])));
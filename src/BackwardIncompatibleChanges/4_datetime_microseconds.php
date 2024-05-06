<?php
// DateTime constructor incorporates microseconds
var_dump(new DateTime() == new DateTime());

list($now1, $now2) = [new DateTime(), new DateTime()];
var_dump($now1->format('H:i:s:u'));
var_dump($now2->format('H:i:s:u'));


if (new DateTime() == new DateTime()){
    echo "Yes";
} else {
    echo "No";
}
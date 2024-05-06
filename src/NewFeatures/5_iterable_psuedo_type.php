<?php
// array as primitive type or an instance of Traversable

function foo(iterable $iterable = []) {
    foreach ($iterable as $val) {
        //
    }
}

function bar(): iterable {
    return [1, 2, 3];
}

interface Example {
    public function method(array $array): iterable;
}

class ExampleImplementation implements Example {
    public function method(iterable $iterable): array {
        // Parameter broadened and return narrowed.
    }
}


var_dump(is_iterable([1, 2, 3])); // bool(true)
var_dump(is_iterable(new ArrayIterator([1, 2, 3]))); // bool(true)
var_dump(is_iterable((function () { yield 1; })())); // bool(true)
var_dump(is_iterable(1)); // bool(false)
var_dump(is_iterable(new stdClass())); // bool(false)
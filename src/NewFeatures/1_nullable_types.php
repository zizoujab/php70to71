<?php
// Type declarations for parameters and return values can now be marked as nullable
// by prefixing the type name with a question mark

function testReturn(): ?string
{
    if (rand(0,10) < 5) {
        return 'elePHPant';
    }
    return null;
}

function test(?string $name)
{
    var_dump($name);
}

test('elePHPant');
test(null);
// will throw fatal error too few arguments
test();
<?php
// Code dublication
try {
    // Some code...
} catch (ExceptionType1 $e) {
    // Code to handle the exception
} catch (ExceptionType2 $e) {
    // Same code to handle the exception
} catch (Exception $e) {
    // ...
}
// => solution : multi catch exception handling
try {
    // Some code...
} catch (ExceptionType1 | ExceptionType2 $e) {
    // Code to handle the exception
} catch (\Exception $e) {
    // ...
}
# PHP Unset Object Property Bug

This repository demonstrates a common, yet subtle, bug in PHP related to accessing object properties that might not be set.  Directly accessing an unset property can lead to unexpected behavior or even fatal errors if not handled correctly.

## The Problem

PHP's loose type system doesn't always provide clear error messages when you try to access properties of an object that haven't been initialized.  This can make debugging harder because the error might not surface immediately.

The provided `bug.php` illustrates this issue.  Running this script might produce a warning (or even a fatal error depending on your PHP configuration) if the `email` property is accessed before being assigned a value.

## The Solution

The `bugSolution.php` file shows how to prevent this issue using PHP's null coalescing operator (`??`) or by explicitly checking the property's existence with `isset()` or `property_exists()`.  These methods provide safer and more controlled ways to handle potentially unset properties.

Feel free to use this as a reference to avoid this type of problem in your own PHP projects.
<?php
/**
 * Created by PhpStorm.
 * User: James
 * Date: 2016-03-23
 * Time: 2:17 PM
 */
class MyClass
{
  const CONSTANT = 'constant value';

  function showConstant() {
    echo self::CONSTANT . "\n";
  }
}

echo MyClass::CONSTANT . "\n";

$classname = "MyClass";
echo $classname::CONSTANT . "\n";  // As of PHP 5.3.0

$class = new MyClass();
$class->showConstant();

echo $class::CONSTANT . "\n"; // As of PHP 5.3.0
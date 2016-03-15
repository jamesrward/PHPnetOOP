<?php
/**
 * Created by PhpStorm.
 * User: James
 * Date: 2016-03-13
 * Time: 11:01 PM
 */
Class Foo
{
  public $bar;

  public function __construct()
  {
    $this->bar = function() {
      return 42;
    };
  }
}

$obj = new Foo();
$func = $obj->bar;
echo $func(), PHP_EOL;
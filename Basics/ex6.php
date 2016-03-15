<?php
/**
 * Created by PhpStorm.
 * User: James
 * Date: 2016-03-12
 * Time: 10:33 PM
 */
class Foo
{
  public $bar = 'property';

  public function bar() {
    return 'method';
  }
}

$obj = new Foo();
echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;

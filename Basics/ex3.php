<?php
/**
 * Created by PhpStorm.
 * User: James
 * Date: 2016-03-10
 * Time: 3:59 PM
 */
class SimpleClass
{
  // property declaration
  public $var = 'a default value';

  // method declaration
  public function displayVar() {
    echo $this->var;
  }
}

$instance = new SimpleClass();

// This can also be done with a variable:
$classname = 'SimpleClass';
$instance = new $classname(); // new SimpleClass()

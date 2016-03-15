<?php
/**
 * Created by PhpStorm.
 * User: James
 * Date: 2016-03-10
 * Time: 4:04 PM
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

$assigned = $instance;
$reference =& $instance;

$instance->var = '$assigned will have this value';

$instance = null; // $instance and $reference become null

var_dump($instance);
var_dump($reference);
var_dump($assigned);
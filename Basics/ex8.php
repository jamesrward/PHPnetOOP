<?php
/**
 * Created by PhpStorm.
 * User: James
 * Date: 2016-03-13
 * Time: 11:04 PM
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

class ExtendClass extends SimpleClass
{
  // Redefine the parent method
  function displayVar()
  {
    echo "Extending class\n";
    parent::displayVar();
  }
}

$extend = new ExtendClass();
$extend->displayVar();

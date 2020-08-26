<?php

require_once "base.php";

$obj = new Base();
//$obj->printProperties();

echo $obj->a . '<br>'; // работает
//echo $obj->b . '<br>'; // Fatal error: Uncaught Error: Cannot access protected property Base::$b
//echo $obj->c . '<br>'; // Fatal error: Uncaught Error: Cannot access private property Base::$c

$in = new Inherited();
$in->printProperties();

echo $in->a . '<br>'; // работает
//echo $in->b . '<br>'; // Fatal error: Uncaught Error: Cannot access protected property Inherited::$b
//echo $in->c . '<br>'; // Notice: Undefined property: Inherited::$c

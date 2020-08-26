<?php

//class Base
//{
//    public $a = "a public";
//    protected $b = "b protected";
//    private $c = "c private";
//
//    function printProperties() {
//        echo $this->a . '<br>';
//        echo $this->b . '<br>';
//        echo $this->c . '<br>';
//    }
//}

class Base
{
    public $a = "a public";
    protected $b = "b protected";
    private $c = "c private";
}

class Inherited extends Base {

    function printProperties() {
        echo $this->a . '<br>';
        echo $this->b . '<br>';
        echo $this->c . '<br>'; // Notice: Undefined property: Inherited::$c
    }
}
<?php

// No 1
// What does OOP stand for? Object Oriented Programming

// No 2
// The process of creating an object of a class is called: instantiation

// No 3
class Singer{
    public $name = "Ann";
    public function display(){
        echo $this->name;
    }    
}
$s = new Singer();
$s->display();

// No 4
interface MusicianInterface{
    public function play();
}
class Guitarist implements MusicianInterface{
    public function play(){
        echo "La La La";
    }
}
$obj = new Guitarist();
$obj->play();

// No 5
// Which keyword is used to refer to properties or methods within the class itself? this

// No 6
class A{
    final function Foo(){
        echo "A";
    }
}
class B extends A{
    function Foo(){
        echo "B";
    }
}

?>
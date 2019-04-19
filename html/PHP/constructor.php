<?php

class User
{
    var $name = "I am pig <br>";

    function __construct()
    {
        echo "I am constructor<br>";
    }

    function __destruct()
    {
        echo "I am destructor<br>";
    }

    function user()
    {
        return " I am user<br>";
    }

    function getName()
    {
        echo $this->name;
        echo $this->age;
    }

    var $age = "I am ten years old <br>";

    function aa()
    {
        echo "You are finish <br>";
    }
}
/*$user=new User();
echo $user->user();
echo  $user->getName();*/
<?php

class Pair
{
    private $id=0;
    private $userA;
    private $userB;

    function __set ( $name , $value )
    {
        // TODO: Implement __set() method.
        $this->$name=$value;
    }

    function __get ( $name )
    {
        // TODO: Implement __get() method.
        return $this->$name;
    }
}
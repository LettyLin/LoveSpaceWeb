<?php

class Photograph
{
    private $id;
    private $pushTime;
    private $imageURL;
    private $imageDescribe;

    function setId($id){$this->id=$id;}
    function getId(){return $this->id;}

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
<?php

class Comment
{
    private $id;
    private $userId;
    private $content;
    private $commentType;
    private $objectId;
    private $pushTime;

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
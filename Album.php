<?php

class Album
{
    private $id;
    private $accessible;
    private $albumId;
    private $albumHeadId;
    private $albumName;
    private $albumDescribe;

    function __construct ($id,$accessible,$albumId,$albumHeadId,$albumName,$albuDescribe)
    {
        $this->id=$id;
        $this->accessible=$accessible;
        $this->albumId=$albumId;
        $this->albumHeadId=$albumHeadId;
        $this->albumName=$albumName;
        $this->albumDescribe=$albuDescribe;
    }

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
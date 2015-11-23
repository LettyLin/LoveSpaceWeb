<?php

class Diary
{
    private $title;
    private $content;
    private $time;
    private $id;
    private $type;
    private $accessible;

    function __construct ($title,$content,$id,$type,$time)
    {
        $this->title=$title;
        $this->time=$time;
        $this->id=$id;
        $this->content=$content;
        $this->type=$type;
        $this->accessible=1;
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
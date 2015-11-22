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

    function setTitle($title){$this->title=$title;}
    function getTitle(){return $this->title;}

    function setContent($content){$this->content=$content;}
    function getContent(){return $this->content;}

    function getTime(){return $this->time;}

    function getType(){return $this->type;}

    function setAccessible($accessible){$this->accessible=$accessible;}
    function getAccessible(){return $this->accessible;}

    function getId(){return $this->id;}
}
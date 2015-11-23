<?php
include "MYSQL.php";
class ExecuteMYSQL
{
    private $con="";
    function __construct ()
    {
        $this->con=MYSQL::getInstance()->getCon();
    }

    function Add($content,$type)
    {
        $sql="";
        switch($type)
        {
            case "users":
                $sql="INSERT INTO ".$type." (id,email,sex,userName,headImgID,age,birthdayDate)".
                    " VALUES ($content->getId(),$content->email,".
                    "$content->gender,$content->headImagId,".
                    "$content->age,$content->birthday);";
                break;

            case "diaries":
                $sq1="INSERT INTO".$type." (id,accessible,diaryTitle,diaryType,pushTime.content)".
                    " VALUES ($content->id,$content->accessible,".
                    "$content->title,$content->type,".
                    "$content->time,$content->content);";
                break;

            case "album":
                $sql="INSERT INTO".$type." (id,accessible,albumId,albumHeadId,albumName,albumDescribe)".
                    " VALUES ($content->id,$content->accessible,".
                    "$content->albumId,$content->albumHeadId,".
                    "$content->albumName,$content->albumDescribe);";
                break;
            case "loveInfo":
                $sql="INSERT INTO".$type." (id,title,content)".
                    " VALUES ($content->id,$content->title,".
                    "$content->content);";
                break;

            case "photograph":
                $sql="INSERT INTO".$type." (id,pushTime,imageURL,imageDescribe)".
                    " VALUES ($content->id,$content->pushTime,".
                    "$content->imageURL,$content->imageDescribe);";
                break;

            case "comment":
                $sql="INSERT INTO".$type." (id,userId,content,contentType,objectId,pushTime)".
                    " VALUES ($content->id,$content->content,".
                    "$content->contentType,$content->objectId,".
                    "$content->pushTime);";
                break;

            case "memorialDay":
                $sql="INSERT INTO".$type." (theDate,pairId,content)".
                    " VALUES ($content->theDate,$content->pairId,".
                    "$content->content);";
                break;

            case "pair":
                $sql="INSERT INTO".$type." (id,userA,userB)".
                    " VALUES ($content->id,$content->userA,".
                    "$content->userB);";
                break;
        }
        mysqli_query($this->con,$sql);
    }

    function Delete($type,$id)
    {
        $sql="";
        switch($type)
        {
            case "users":
                $sql="delete from users where id=".$id;
                break;
            case "diaries":
                $sql="delete from diaries where id=".$id;
                break;
            //others
        }
        mysqli_query($this->con,$sql);
    }

    function Update($content,$type,$id)
    {
        $sql="";
        switch($type)
        {
        }
        mysqli_query($this->con,$sql);
    }

    function Search($content,$type)
    {}
}
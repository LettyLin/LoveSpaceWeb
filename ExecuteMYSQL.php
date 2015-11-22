<?php

class ExecuteMYSQL
{
    function Add($content,$type)
    {
        $sql="";
        switch($type)
        {
            case "users":
                $sql="INSERT INTO ".$type." (id,email,sex,userName,headImgID,age,birthdayDATE)".
                    " VALUES ($content->getId(),$content->getEmail(),
                    $content->getGender(),$content->getHeadImgID(),
                    $content->getAge(),$content->getBirthday();)";

            case "diary":
                $sq1="INSERT INTO".$type." (id,accessible,diaryTitle,diaryType,pushTime.content)".
                    " VALUES ($content->getId(),$content->getAccessible(),
                    $content->getTitle(),$content->getType(),
                    $content->getTime(),$content->getContent();)";
            case "album":

            case "loveInfo":

            case "photograph":

            case "pair":

            case "comment":

            case "memorialDay":

        }
        mysqli_query(MYSQL::getInstance()->getCon(),$sql);
    }

    function delete($content,$type)
    {}

    function Update($content,$type)
    {}

    function Search($content,$type)
    {}
}
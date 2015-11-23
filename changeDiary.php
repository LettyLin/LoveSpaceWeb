<?php
session_start();
if(isset($_SESSION['name']))
{
    if(isset($_POST['add']))
    {
        $id = mysqli_query("select * from users WHERE name='{$name}'");
        $diary = new Diary($_POST['title'],$_POST['content'],$id,$_POST['type'],time());
        $sql = new ExecuteMYSQL();
        $sql->Add($diary,diaries);
    }
    if(isset($_POST['delete']))
    {
        $id = mysqli_query("select * from users WHERE name='{$name}'");
        $sql=new ExecuteMYSQL();
        $sql->Delete($_POST['type'],$id);
    }
    if(isset($_POST['update']))
    {
        $id = mysqli_query("select * from users WHERE name='{$name}'");
        $sql=new ExecuteMYSQL();
        //
    }

}
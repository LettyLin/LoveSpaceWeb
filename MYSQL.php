<?php

class MYSQL
{
    private $host;
    private $name;
    private $password;
    private $dbname;
    private $con;
    private static $_instance;

    public static function getInstance()
    {
        if(!self::$_instance instanceof self)
        {

            self::$_instance=new self("localhost","root","123456","lovespace");
        }
        return self::$_instance;
    }
    function __construct($host,$name,$password,$dbname)
    {
        $this->host=$host;
        $this->name=$name;
        $this->password=$password;
        $this->dbname=$dbname;
        mysqli_query($this->getCon(), "create table if not exists user(id int(10) not null PRIMARY KEY auto_increment,email varchar(50),sex int(5),userName VARCHAR(50),headImgID INT(10),age INT(5),birthdayDate INT(20))");;
    }

    function getCon()
    {
        $con=mysqli_connect($this->host,$this->name,$this->password,$this->dbname);
        if(mysqli_connect_errno($con))
        {
            echo "could not connect MYSQL".mysqli_connect_error();
        }
        return $con;
    }
}
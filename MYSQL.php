<?php

class MYSQL
{
    private $host;
    private $name;
    private $password;
    private $dbname;
    private $con;
    private static $_instance;

    function getInstance()
    {
        if(!self::$_instance instanceof self)
        {
            self::$_instance=new self;
        }
        return self::$_instance;
    }
    function __construct ($host,$name,$password,$dbname)
    {
        $this->host=$host;
        $this->name=$name;
        $this->password=$password;
        $this->dbname=$dbname;
        $this->con=$this->getCon();
    }

    function getCon()
    {
        $con=mysqli_query($this->host,$this->name,$this->password,$this->dbname);
        if(mysqli_connect_errno($con))
        {
            echo "could not connect MYSQL".mysqli_connect_error();
        }
        return $con;
    }
}
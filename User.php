<?php
//$rows = mysli_query("select * from erwa");
//for($row = mysqli_fetch_row($rows)){
  //  $id[a] = $row[0];
    //$name[a] = $row["name"];
//}
class User
{
    private $email;
    private $name;
    private $password;
    private $gender;//0男  1女
    private $age;
    private $birthday;
    private $headImagId;

    function __construct ($email,$password,$gender)
    {
        $this->password=$password;
        $this->email=$email;
        $this->gender=$gender;
        $this->name="Q";
        $this->age=0;
        $this->birthday=0101;
        $this->headImagId=0;
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

    function getId(){return self::$id;}
}
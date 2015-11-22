<?php

class User
{
    private static $id=-1;
    private $email;
    private $name;
    private $password;
    private $gender;
    private $age;
    private $birthday;
    private $headImagId;

    function __construct ($email,$password,$gender)
    {
        $this->password=$password;
        $this->email=$email;
        $this->gender=$gender;
        $this->id +=$this->id+1;
        $this->name="Q";
        $this->age=0;
        $this->birthday="1.1";
        $this->headImagId="";
    }

    function getId(){return $this->id;}

    function getEmail(){return $this->email;}

    function setPassword($password){$this->password=$password;}
    function getPassword(){return $this->password;}

    function setName($name){ $this->name=$name;}
    function getName(){return $this->name;}

    function setGender($gender){$this->gender=$gender;}
    function getGender(){return $this->gender;}

    function setAge($age){$this->age=$age;}
    function getAge(){return $this->age;}

    function setBirthday($birthday){ $this->birthday=$birthday;}
    function getBirthday(){ return $this->birthday;}

    function setHeadImagId($headImagId){$this->headImagId=$headImagId;}
    function getHeadImagId(){return $this->headImagId;}
}
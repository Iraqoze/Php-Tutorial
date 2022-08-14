<?php

class Person
{
    var $name;
    var $age;
    var $city;

    //Constructor
    function _construct($name, $age, $city)
    {
        $this->name = $name;
        $this->age = $age;
        $this->city = $city;

    }

    function setName($param)
    {
        $this->name = $param;
    }

    function getName()
    {
        return $this->name;
    }

    function setAge($param)
    {
        $this->age = $param;
    }

    function getAge()
    {
        return $this->age;
    }
    function setCity($param)
    {
        $this->city = $param;
    }

    function getCity()
    {
        return $this->city;
    }


    function toString()
    {
        return $this->getName();
    }

}

//INHERITANCE

class Student extends Person
{
    var $id;
    function setId($id)
    {
        $this->id = $id;
    }

    function getStudent()
    {

        print($this->getName());
        print($this->getAge());
        print($this->getCity());
        print($this->id);

    }
}

//$person = new Person("Lionel", "23", "Nairobi");
$stud = new Student();
$stud->name = "Lio";
$stud->age = 23;
$stud->city = "Nairobi";
$stud->id = "12345";

$stud->getStudent();
//print $person->getName();
//print $person->getAge();
//print $person->getCity();


?>
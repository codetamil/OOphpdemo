<?php
class Employee
{

   var $id;
    var $name;

function sayHello()
{
    echo 'Welcome to Object Oriented php'."<br>";
}

function addNumbers($a,$b)
{
    return $a+$b;
}
function details($i,$n)
{
    $id=$i;
    $name=$n;

    echo $id."<br> ".$name."<br>";
}

}

$obj=new Employee();

$obj->sayHello();

$result=$obj->addNumbers(23,45);

echo $result;

$obj->details(100,"jack");

?>
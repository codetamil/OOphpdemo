<?php

echo "Welcome to PHP programming";


function getData()
{
    echo 'getting data';
}

function getName($name)
{
    return $name;
}


getdata();

$name=getName('PHP Basics');


echo "<br>".$name;





?>
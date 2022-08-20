<?php

require "person.php";
require "english.php";
require "german.php";
require "french.php";

function greating($people)
{
    foreach ($people as $person)
    {
        echo $person->great();
    }
}

$people=[
    new English(),
    new French(),
    new German(),
];



greating($people);




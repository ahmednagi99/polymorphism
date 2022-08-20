<?php

require "person.php";
require "english.php";
require "german.php";
require "french.php";

function foo($people)
{
    foreach ($people as $person)
    {
        echo $person->printing();
    }
}
$peoples=[
    new Engliish(),
    new Freench(),
    new Germaan(),
];
foo($peoples);
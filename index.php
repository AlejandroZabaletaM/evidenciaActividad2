<?php

/**
* Escalera Sierra Juan Francisco 18270278
*/
require_once('app/Being.php');
require_once('app/Person.php');
require_once('app/Student.php');

$people = [
    $franco = new Student("Juan", "Francisco", "Escalera Sierra", "06-08-1997", 18270278),
    $jose = new Person("Jose", "Mariano", "Escalera Sierra", "02-10-1985"),
];

echo $jose->walk();

foreach ($people as $person) {
    echo $person;
}

<?php

/**
 * Escalera Sierra Juan Francisco 18270278
 */
class Student extends Person
{
    protected $universityId;

    public function __construct($firstName, $middleName, $lastName, $dateOfBirth, $universityId){
        parent::__construct($firstName, $middleName, $lastName, $dateOfBirth);

        $this->universityId = $universityId;
    }

    public function enrrolToCourse(){
        return "Inscrito en el curso de Programacion Web con Frameworks";
    }

    public function __toString()
    {
        return parent::__toString() . " " . $this->universityId;
    }
}

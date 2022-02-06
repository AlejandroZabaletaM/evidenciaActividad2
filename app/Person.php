<?php

/**
 * Escalera Sierra Juan Francisco 18270278
 */
class Person extends Being{
    protected $firstName;
    protected $middleName;
    protected $lastName;
    protected $dateOfBirth;

    public function __construct($firstName, $middleName, $lastName, $dateOfBirth){
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
    }

    public function walk(){
        return $this->firstName . " esta caminado";
    }

    public function __toString(){
        return $this->firstName . " " . $this->middleName . " " . $this->lastName;
    }
}

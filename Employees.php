<?php

class Employees extends Author
{
    public function __construct($firstName, $lastName, $birthDate, $startYear, $city, $wage)
    {
        parent::__construct($firstName, $lastName, $birthDate, $startYear, $city, $wage);
    }
}

?>
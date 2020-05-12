<?php

class Author
{
    public $firstName;
    public $lastName;
    private $birthDate;	
    private $startYear;	
    private $city;   
    private $wage;   	

    public function __construct($firstName, $lastName, $birthDate, $startYear, $city, $wage)
    {
	$this->firstName = $firstName;
        $this->lastName = $lastName;
	$this->birthDate = $birthDate;
	$this->startYear = $startYear;
        $this->city = $city;
        $this->wage = $wage;
    }

    public function get_birthDate()
    {
        return $this->birthDate;
    }	
      public function set_birthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    public function get_startYear()
    {
        return $this->startYear;
    }	
      public function set_startYear($startYear)
    {
        $this->startYear = $startYear;
    }
	
    public function get_city()
    {
        return $this->city;
    }
    public function set_city($city)
    {
        $this->city = $city;
    }

    public function get_wage()
    {
        return $this->wage;
    }
    public function set_wage($wage)
    {
        $this->wage = $wage;
    }
}
?> 
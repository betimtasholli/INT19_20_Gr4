<?php

class Director extends Author
{
    private $numriIPuntoreve;

    public function __construct($firstName, $lastName, $birthDate, $startYear, $city, $wage, $numriIPuntoreve)
    {
        parent::__construct($firstName, $lastName, $birthDate, $startYear, $city, $wage);
	$this-> numriIPuntoreve = $numriIPuntoreve;
    }

    public function set_numriIPuntoreve($numriIPuntoreve)
    {
        $this->numriIPuntoreve = $numriIPuntoreve;
    }
    public function get_numriIPuntoreve()
    {
        return $this->numriIPuntoreve;
    }

}
?>
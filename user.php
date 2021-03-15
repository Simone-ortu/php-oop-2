<?php

class User {
  public $name;
  public $surname;
  public $age;
  public $rango;
  public $paying = false;
  public $points = 0;

  public function __construct($_name, $_surname, $_age, $_rango, $_paying) {
    $this->name = $_name;
    $this->surname = $_surname;
    $this->age = $_age;
    $this->rango = $_rango;
    $this->paying = $_paying;
  }

  public function setPoints($rango, $paying) {
    if ($paying == true) {
      $this->points = $rango * 15;
    } else {
      $this->points = $rango * 5;
    }
  }

  public function getPoints()
  {
    return $this->points;
  }
}

<?php
class Employe{
  // Proprieties
  protected string $login;
  protected string $lastname;
  protected string $firstname;
  protected int $birthdate;
  protected string $genre;
  protected float $salary;

  // Methodes
  // Magic function ( launch on class call )
  private function __construct($login, $lastname, $firstname, $birthdate, $genre, $salary)  {
    $this->login = $login;
    $this->lastname = $lastname;
    $this->firstname = $firstname;
    $this->birthdate = $birthdate;
    $this->genre = $genre;
    $this->salary = $salary;
  }

  // Set value on function call
  public function setLogin($login)  {
    $this->login = $login;
  }
  public function setLastname($lastname)  {
    $this->lastname = $lastname;
  }
  public function setFirstname($firstname)  {
    $this->firstname = $firstname;
  }
  public function setBirthdate($birthdate)  {
    $this->birthdate = $birthdate;
  }
  public function setGenre($genre)  {
    $this->genre = $genre;
  }
  public function setSalary($salary)  {
    $this->salary = $salary;
  }

  // Get value on function call
  public function getLogin()  {
    return $this->login;
  }
  public function getFirstname()  {
    return $this->firstname;
  }
  public function getLastname()  {
    return $this->lastname;
  }
  public function getBirthday()  {
    return $this->birthdate;
  }
  public function getGenre()  {
    return $this->genre;
  }
  public function getSalary()  {
    return $this->salary;
  }
}
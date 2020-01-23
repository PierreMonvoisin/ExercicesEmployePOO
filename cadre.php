<?php
class Cadre extends Employe{
  protected int $staff;

  private function __construct($staff)  {
    $this->staff = $staff;
  }
  public function setStaff($staff){
    $this->staff = $staff;
  }
  public function getStaff(){
    return $this->staff;
  }
}
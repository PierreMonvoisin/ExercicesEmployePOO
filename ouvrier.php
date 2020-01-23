<?php
class Ouvirer extends Employe{
  protected int $RTT;

  private function __construct($RTT)  {
    $this->RTT = $RTT;
  }
  public function setRTT($RTT){
    $this->RTT = $RTT;
  }
  public function getRTT(){
    return $this->RTT;
  }
}
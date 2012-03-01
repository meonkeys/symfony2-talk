<?php

namespace Loco\StockBundle\Service;

class Stock {
  private $ticker;
  
  public function __construct($ticker) {
    $this->ticker = $ticker;
  }

  public function getTicker() {
    return $this->ticker;
  }

  public function setTicker($ticker) {
    $this->ticker = $ticker;
  }
}

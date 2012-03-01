<?php

namespace Loco\StockBundle\Service;

class Stock {
  private $ticker;
  private $price;

  public function __construct($ticker, $price) {
    $this->ticker = $ticker;
    $this->price = $price;
  }

  public function getTicker() {
    return $this->ticker;
  }

  public function setTicker($ticker) {
    $this->ticker = $ticker;
  }

  public function getPrice() {
    return $this->price;
  }

  public function setPrice($price) {
    $this->price = $price;
  }

}

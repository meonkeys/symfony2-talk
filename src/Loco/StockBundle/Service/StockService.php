<?php

namespace Loco\StockBundle\Service;

class StockService {
  public function listStocks() {
    $stocks = array(
      new Stock('GOOG'),
      new Stock('AAPL'),
      new Stock('RHT'),
    );
    return $stocks;
  }
}

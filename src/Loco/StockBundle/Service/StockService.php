<?php

namespace Loco\StockBundle\Service;

class StockService {
  /**
   * Fetch stock price data from Yahoo!
   *
   * Example response:
   * <pre>
   * "RHT",49.46
   * "GOOG",618.25
   * </pre>
   */
  public function fetchPrices(array $stocks) {
    $ch = curl_init();
    $stockNames = join(',', $stocks);
    curl_setopt($ch, CURLOPT_URL,
      "http://download.finance.yahoo.com/d/quotes.csv?s=$stockNames&f=sl1");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $csv = curl_exec($ch);
    assert(200 === curl_getinfo($ch, CURLINFO_HTTP_CODE));
    curl_close($ch);
    foreach (preg_split("/\n/", $csv) as $line) {
      $stock = str_getcsv($line);
      if (count($stock) < 2) continue;
      $prices[] = array('ticker' => $stock[0], 'price' => $stock[1]);
    }
    return $prices;
  }

  public function listStocks() {
    $stocks = array('GOOG', 'AAPL', 'RHT');
    $prices = $this->fetchPrices($stocks);
    $objects = array();
    foreach ($prices as $p) {
      $objects[] = new Stock($p['ticker'], $p['price']);
    }
    return $objects;
  }
}

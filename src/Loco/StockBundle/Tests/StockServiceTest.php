<?php

namespace Loco\StockBundle\Tests;

class StockServiceTest extends ContainerTest {
  public function testListStocks() {
    $stocks = $this->get('stock')->listStocks();
    $this->assertEquals(3, count($stocks));
  }
}

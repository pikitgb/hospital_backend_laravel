<?php

class BaseTest extends PHPUnit_Framework_TestCase {

  public function testBase() {
    $a = 0;
    $b = 0;

    $c = $a + $b;
    $this->assertEquals(0, $c);
  }
}


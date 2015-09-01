<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class IsRedirectingTest extends TestCase
{
  public function testHomePage()
  {
    $this->call('GET', '/home/dashboard');
    $this->assertRedirectedTo('login');
  }
}

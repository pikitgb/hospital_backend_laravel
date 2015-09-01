<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomeIndexTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testHomePage()
    {
        $this->visit('/')
             ->see('HospitalCity');
    }
}

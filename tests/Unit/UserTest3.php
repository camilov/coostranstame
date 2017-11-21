<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest3 extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        
    	$this->visit("users/create"),
    	$this->type("name","camilo"),
    	$this->type("email","cam@gmail.com"),
    	$this->type("password","camilo123"),
    	$this->type("tipo","usuario"),
    	$this->press("Registrar"),
    	$this->asserPathIs("users/store"),
    	;

    }


}

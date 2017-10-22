<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class modeloUsuario extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }


   public function testUsuario()
	{
    // Make call to application...

    	$this->assertDatabaseHas('usuario', [
	    	'ID' => 34,
	        'name' => 'sally',
	        'email' => 'sally@example.com',
	        'password' => bcrytp('adsdi3812'),
	        'tipo' => 'admin'

    	]);
    }
}

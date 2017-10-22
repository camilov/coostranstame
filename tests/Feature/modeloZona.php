<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class modeloZona extends TestCase
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

     public function testZona()
	{
    // Make call to application...

    	$this->assertDatabaseHas('zona', [
	    	'idzona' => 14,
	        'zona' => 'meta',
	        'idusuario' => 30,

    	]);
    }
}

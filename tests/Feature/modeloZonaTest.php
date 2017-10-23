<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class modeloZonaTest extends TestCase
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

    	$this->assertDatabaseMissing('zona', [
	    	'idzona' => 14,
	        'zona' => 'meta',
	        'ts' => '2017-10-21 20:42:00',
	        'idusuario' => 30,

    	]);
    }

}

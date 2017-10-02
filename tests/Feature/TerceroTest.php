<?php

namespace Tests\Feature;

use Tests\TestCase;
use sisVentas\Tercero;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TerceroTest extends TestCase
{


	   /**
     * A basic test example.
     *
     * @return void
     */

	/** @test*/

    public function testBasicExample()
    {
         $response = $this->get('/');

        $response->assertStatus(200);
   }

  	 public function terceroPrueba()
    {
        $tercero = factory(Tercero::class)->create();


        $response =$this->get(route('tercero.index'));
        $response =$this->get(route('tercero.create'));
       
        foreach ($tercero as  $terceros) {
            $response->assertSee($tercero->title);
            $response->assertSee($tercero->content);
        }
        $response->assertStatus(200);

    }

}

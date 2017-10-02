<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ZonaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    /** @test */

    public function testExample()
    {
        $this->assertTrue(true);
    }



      public function zonaPrueba()
    {
        $zona = factory(Zona::class)->create();


        $response =$this->get(route('zona.index'));
        $response =$this->get(route('zona.create'));
        
       
       

        foreach ($zona as  $zonas) {
            $response->assertSee($zonas->title);
 			$response->assertSee($zonas->content);
           
        }

         $response->assertStatus(200);

    }
   
}

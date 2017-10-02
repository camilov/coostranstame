<?php

namespace Tests\Feature;

use sisVentas\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class UserTest extends TestCase
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


 /*  public function testApplication()
    {
        $response = $this->withSession(['foo' => 'bar'])
                         ->get('/');
    }
*/

    public function testUser()
    {
        $user = factory(User::class)->create();
        \Auth::loginUsingId($user->ID);

        $response =$this->get(route('users.index'));
        $response =$this->get(route('users.create'));
        

        $response->assertStatus(200);
   

  /*      $response = $this->json('POST', '/user', ['name' => 'Sally']);
*/
      /*  $response->assertStatus(200);
                 ->assertJson(['created' => false,
            ]);
*/
    /*   foreach ($user as $users) {
            $response->assertSee($users->title);
            $response->assertSee($users->content);
        }

*/
    }



   

   
}

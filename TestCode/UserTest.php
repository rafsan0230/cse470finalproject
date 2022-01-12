<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User; 
use App\Messages;
use App\Support;
use App\BloodRequest;
use App\Camp;

class UserTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    // public function testBasicExample()
    // {
    //     $this->visit('/')
    //          ->see('Laravel 5');
    // }

    /** @test */
    public function logged_in_users_can_see_home(){
        // $this->actingAs(User::factory()->create());
        
        $response = $this->get('/home');
        $response->assertStatus(200);
    }
}
<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
// below use will not work use above instead
// use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\Concerns\MakesHttpRequests;
use App\Models\User;

use function PHPUnit\Framework\assertTrue;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
    public function test_login_form()
    {
        $response = $this->get('/login');

    }

    public function test_user_duplication()
    {
        $user1 = User::make([
            'name'=> 'Malek',
            'email' => 'malek@gmail.com'
        ]);

        $user2 = User::make([
            'name' => 'Naruto',
            'email' => 'naruto@gmail.com'
        ]);

        $res = null;
        if($user1->name != $user2->name && $user1->email != $user2->email)
        {
            $res = true;
        }
        $this->assertTrue($res);
    }

    public function test_delete_user()
    {
        $user = User::factory()->count(1)->make();

        $user = User::first();

        if($user) 
        {
            $user->delete();
        }
        
        assertTrue(true);
    }
}

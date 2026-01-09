<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Illuminate\Support\Facades\DB;



class RoleTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }
    public function test_roles_v1()
    {
        $count = DB::table('roles')
            ->whereIn('name', ['admin', 'business', 'mapper'])
            ->count();

        // Han d'existir exactament 3 rols
        $this->assertEquals(3, $count);
    }

    public function test_roles_v2()
    {

        $this->assertDatabaseHas('roles', [
            'name' => 'admin',
        ]);

        $this->assertDatabaseHas('roles', [
            'name' => 'business',
        ]);

        $this->assertDatabaseHas('roles', [
            'name' => 'mapper',
        ]);
    }
}

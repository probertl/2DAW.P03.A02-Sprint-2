<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;


class AdminTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_admin_v1()
    {
        $count = DB::table('users')
            ->whereIn('role_id', ['1'])
            ->count();

        // Han d'existir exactament 3 rols
        $this->assertEquals(1, $count);
    }

    public function test_admin_v2()
    {

        $this->assertDatabaseHas('users', [
            'role_id' => '1',
        ]);
    }
}

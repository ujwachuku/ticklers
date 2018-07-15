<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
        	'role_name' => 'User'
        ]);

        Role::create([
        	'role_name' => 'Manager'
        ]);

        Role::create([
        	'role_name' => 'Admin'
        ]);

        Role::create([
        	'role_name' => 'Super user'
        ]);
    }
}

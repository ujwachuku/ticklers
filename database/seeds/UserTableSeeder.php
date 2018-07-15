<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'John Doe',
        	'email' => 'john@doe.com',
        	'password' => Hash::make('123456'),
        	'role_id' => 1
        ]);

        User::create([
        	'name' => 'Jane Doe',
        	'email' => 'jane@doe.com',
        	'password' => Hash::make('123456'),
        	'role_id' => 2
        ]);

        User::create([
        	'name' => 'Jim Doe',
        	'email' => 'jim@doe.com',
        	'password' => Hash::make('123456'),
        	'role_id' => 3
        ]);

        User::create([
        	'name' => 'Sam Doe',
        	'email' => 'sam@doe.com',
        	'password' => Hash::make('123456'),
        	'role_id' => 4
        ]);
    }
}

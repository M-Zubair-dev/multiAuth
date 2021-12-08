<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'userid' => 'admin101',
            'role_id' => 1,
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('123456789'),
        ]);
        $user = User::create([
            'userid' => 'user101',
            'role_id' => 2,
            'name' => 'user',
            'email' => 'user@test.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}

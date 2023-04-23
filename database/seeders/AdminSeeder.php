<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'name'=> 'admin1',
            'email' => 'admin1@gmail.com',
            'email_verified_at' => NULL,
            'password' =>Hash::make("admin1"),
            'avatar' => NULL,
            'remember_token' => NULL,
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => NULL
        ]);
    }
}

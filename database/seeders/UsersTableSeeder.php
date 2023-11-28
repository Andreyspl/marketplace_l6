<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        \DB::table('users')->insert(
//            [
//                'name' => 'admin',
//                'email' => 'admin@admin.com' ,
//                'email_verified_at' => now(),
//                'password' => 'admin',
//                'remember_token' => 'kkkj',
//            ]
//        );
        \App\Models\User::factory()->count(40)->create()->each(function($user){
            $store = \App\Models\Store::factory()->make();
            $user->store()->save($store);
        });


    }
}

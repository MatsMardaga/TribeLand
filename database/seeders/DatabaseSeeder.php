<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $users = \App\Models\User::factory()->times(3)->make([
            [
                'name' => 'admin',
                'email' => 'admin@ehb.be',
                'password' => 'Password!321',
                'country' => 'Belgium',
                'is_admin' => true,
                'birthday' => date("Y-m-d"),
                'about_me' => 'All your base are belong to us',
            ],
            [
                'name' => 'Mats',
                'email' => 'mats.mardaga@gmail.com',
                'password' => 'password2',
                'country' => 'chad',
                'is_admin' => true,
                'birthday' => date("Y-m-d"),
                'about_me' => 'I am Mats, creator of this site, I am sexy and I know it',
            ],
            [
                'name' => 'user2',
                'email' => 'user2@example.com',
                'password' => 'password2',
                'country' => 'uk',
                'is_admin' => false,
                'birthday' => date("Y-m-d"),
                'about_me' => 'user2 details',
            ],

        ]);
        foreach ($users as $user) {
            $user->save();
        }
    }
}

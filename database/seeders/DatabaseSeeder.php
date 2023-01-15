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

        //User seeder

         \App\Models\User::factory()->create([
                'name' => 'admin',
                'email' => 'admin@ehb.be',
                'password' => 'Password!321',
                'country' => 'Belgium',
                'is_admin' => true,
                'birthday' => date("Y-m-d"),
                'about_me' => 'All your base are belong to us',
        ]);
        \App\Models\User::factory()->create([
                'name' => 'Mats Mardaga',
                'email' => 'mats.mardaga@gmail.com',
                'password' => 'test1234',
                'country' => 'Chad',
                'is_admin' => true,
                'birthday' => date("Y-m-d"),
                'about_me' => 'I am sexy and I know it',
        ]);
        \App\Models\User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@test.ehb.be',
                'password' => 'testPassword',
                'country' => 'US',
                'is_admin' => false,
                'birthday' => date("Y-m-d"),
                'about_me' => 'I dont have admin rights',
        ]);




        //Category seeder

        \App\Models\FaqCategory::factory()->create([
                'name' => 'Shipping',
        ]);
        \App\Models\FaqCategory::factory()->create([
                'name' => 'FAQ',
        ]);
        \App\Models\FaqCategory::factory()->create([
                'name' => 'News',
        ]);




        //Question seeder

        \App\Models\FaqQuestion::factory()->create([
                'name' => 'How long will my shipping take',
                'content' => 'it can take between 1 and 2 days, depending on how far away you are from our nearest distributer',
                'category_id' => 6,
        ]);
    }
}
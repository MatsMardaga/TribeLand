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




        //Q&A Category seeder

        \App\Models\FaqCategory::factory()->create([
                'name' => 'Shipping',
        ]);
        \App\Models\FaqCategory::factory()->create([
                'name' => 'FAQ',
        ]);
        \App\Models\FaqCategory::factory()->create([
                'name' => 'News',
        ]);




        //Q&A seeder

        \App\Models\FaqQuestion::factory()->create([
                'name' => 'How long will my shipping take',
                'content' => 'it can take between 1 and 2 days, depending on how far away you are from our nearest distributer',
                'category_id' => 1,
        ]);
        \App\Models\FaqQuestion::factory()->create([
                'name' => 'Do you ship internationally',
                'content' => 'Not yet but we aim to add this in the future',
                'category_id' => 1,
        ]);
        \App\Models\FaqQuestion::factory()->create([
                'name' => 'My shipmet is lost',
                'content' => 'Please contact us via the contact page as soon as possible so we can find out what went wrong and reimburse you the full amount of your order',
                'category_id' => 1,
        ]);
        \App\Models\FaqQuestion::factory()->create([
                'name' => 'Can I suggest an FAQ category ?',
                'content' => 'Yes you can by leaving a comment in the comment page of our site, a new comment will then be sent to the admins',
                'category_id' => 2,
        ]);



        //Newspost seeder

        \App\Models\News::factory()->create([
                'title' => 'Thor',
                'message' => 'Thor is a prominent god in Germanic paganism. In Norse mythology, he is a hammer-wielding god associated with lightning, thunder, storms, sacred groves and trees, strength, the protection of humankind, hallowing, and fertility
                              Due to the nature of the Germanic corpus, narratives featuring Thor are only attested in Old Norse, where Thor appears throughout Norse mythology. Norse mythology, largely recorded in Iceland from traditional material 
                              stemming from Scandinavia, provides numerous tales featuring the god. In these sources, Thor bears at least fifteen names, is the husband of the golden-haired goddess Sif, is the lover of the jötunn Járnsaxa, 
                              and is generally described as being light-skinned, with "hair fairer than gold and red beard, however some scholars dismiss the notion that Thor had a red beard.',
                'user_id' => 1,
                'created_at' => date("Y-m-d"),
                'updated_at' => date("Y-m-d"),
        ]);
        \App\Models\News::factory()->create([
                'title' => 'Loki',
                'message' => 'Loki is a god in Norse mythology. According to some sources, Loki is the son of Fárbauti and Laufey, and the brother of Helblindi and Býleistr. Loki is married to Sigyn and they have two sons, Narfi or Nari and Váli. 
                By the jötunn Angrboða, Loki is the father of Hel, the wolf Fenrir, and the world serpent Jörmungandr.',
                'user_id' => 2,
                'created_at' => date("Y-m-d"),
                'updated_at' => date("Y-m-d"),
        ]);
        \App\Models\News::factory()->create([
                'title' => 'Fenryr',
                'message' => 'Fenrir or Fenrisúlfr, also referred to as Hróðvitnir and Vánagandr, or Vanargand, is a wolf in Norse mythology. Fenrir, together with Hel and the World Serpent, is a child of Loki and giantess Angrboða.',
                'user_id' => 1,
                'created_at' => date("Y-m-d"),
                'updated_at' => date("Y-m-d"),
        ]);




        //Forum Message seeder

        \App\Models\ForumMessage::factory()->create([
                'title' => 'Did Thor really have an axe?',
                'content' => 'I know he has a hammer called Mjolnir but is it true that he had an axe? It seems stupid to have an overpowered hammer
                              and also an overpowered axe',
        ]);
        \App\Models\ForumMessage::factory()->create([
                'title' => 'When will the store page come online?',
                'content' => 'I really want to buy something here but the store page is not online yet, does anyone know when it will come?',
        ]);
        \App\Models\ForumMessage::factory()->create([
                'title' => 'I broke my leg',
                'content' => 'Please help I broke my leg',
        ]);


        //Forum Reply seeder

        \App\Models\ForumReply::factory()->create([
                'content' => 'yes he really did have an axe,Thor’s axe was made in Nidavellir, the realm of the Dwarves.',
                'category_id' => 1,
        ]);
        \App\Models\ForumReply::factory()->create([
                'content' => 'I guess it will come soon, takes a while to make it',
                'category_id' => 2,
        ]);
        \App\Models\ForumReply::factory()->create([
                'content' => 'Dude, call an ambulance or go to a doctor, this is not the place to whine about it',
                'category_id' => 3,
        ]);
        \App\Models\ForumReply::factory()->create([
                'content' => 'Can an admin remove this post? it is ridiculous.',
                'category_id' => 3,
        ]);
    }
}
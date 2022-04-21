<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

       User::create([
           'name' => 'Rangga Saputra',
           'username' => 'renggo',
           'email' => 'karasoki89@gmail.com',
           'password' => bcrypt('rangga89'),
           'is_admin' => 1
           ]);

       User::create([
           'name' => 'Saptjun',
           'username' => 'acun mamang',
           'email' => 'atjunspain89@gmail.com',
           'password' => bcrypt('pakhoy89'),
           'is_admin' => 1
           ]);

       User::create([
           'name' => 'Tester',
           'username' => 'Tester',
           'email' => 'Tester@gmail.com',
           'password' => bcrypt('12345'),
           'is_admin' => 0
           ]);

        

        

    //    User::create([
    //        'name' => 'Anggi Saputra',
    //        'email' => 'anggi@gmail.com',
    //        'password' => bcrypt('12345')
    //        ]);

    //    User::factory(3)->create();

    //    Category::create([
    //        'name' => 'Achievement',
    //        'slug' => 'achievement',
           
    //        ]);

    //    Category::create([
    //        'name' => 'Roaster',
    //        'slug' => 'roaster'
    //        ]);

    //     Category::create([
    //         'name' => 'Farm',
    //         'slug' => 'farm'
    //     ]);

    //     Category::create([
    //         'name' => 'Daily',
    //         'slug' => 'daily'
    //     ]);

        // Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis possimus assumenda voluptatibus a aliquam deserunt praesentium. Commodi, necessitatibus ea nostrum dolore omnis at doloremque saepe ratione excepturi, nemo officiis quod!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A rem necessitatibus reprehenderit aut porro fugiat fugit itaque velit, corrupti sunt iusto esse doloremque quaerat consequatur, minima suscipit eligendi nulla quisquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, deserunt deleniti? Cum possimus ullam quo laudantium maxime, sapiente iusto sunt aut nulla aliquid ratione eos culpa doloribus totam cupiditate asperiores.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis possimus assumenda voluptatibus a aliquam deserunt praesentium. Commodi, necessitatibus ea nostrum dolore omnis at doloremque saepe ratione excepturi, nemo officiis quod!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A rem necessitatibus reprehenderit aut porro fugiat fugit itaque velit, corrupti sunt iusto esse doloremque quaerat consequatur, minima suscipit eligendi nulla quisquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, deserunt deleniti? Cum possimus ullam quo laudantium maxime, sapiente iusto sunt aut nulla aliquid ratione eos culpa doloribus totam cupiditate asperiores.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis possimus assumenda voluptatibus a aliquam deserunt praesentium. Commodi, necessitatibus ea nostrum dolore omnis at doloremque saepe ratione excepturi, nemo officiis quod!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A rem necessitatibus reprehenderit aut porro fugiat fugit itaque velit, corrupti sunt iusto esse doloremque quaerat consequatur, minima suscipit eligendi nulla quisquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, deserunt deleniti? Cum possimus ullam quo laudantium maxime, sapiente iusto sunt aut nulla aliquid ratione eos culpa doloribus totam cupiditate asperiores.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis possimus assumenda voluptatibus a aliquam deserunt praesentium. Commodi, necessitatibus ea nostrum dolore omnis at doloremque saepe ratione excepturi, nemo officiis quod!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. A rem necessitatibus reprehenderit aut porro fugiat fugit itaque velit, corrupti sunt iusto esse doloremque quaerat consequatur, minima suscipit eligendi nulla quisquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, deserunt deleniti? Cum possimus ullam quo laudantium maxime, sapiente iusto sunt aut nulla aliquid ratione eos culpa doloribus totam cupiditate asperiores.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}

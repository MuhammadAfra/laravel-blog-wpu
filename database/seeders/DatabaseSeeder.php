<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory(3)->create();
        
        // User::create([
        //     'name' => 'Muhammad Afra',
        //     'email' => 'muhammadafra45@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Muhammad Topan',
        //     'email' => 'topankurniawan@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. L ore Gallery of type has been the idustry standard dummy',
        //     'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. L ore Gallery of type has been the idustry standard dummy text of the printing and typesetting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. L ore Gallery of type has been the idustry standard dummy',
        //     'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. L ore Gallery of type has been the idustry standard dummy text of the printing and typesetting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. L ore Gallery of type has been the idustry standard dummy',
        //     'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. L ore Gallery of type has been the idustry standard dummy text of the printing and typesetting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. L ore Gallery of type has been the idustry standard dummy',
        //     'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. L ore Gallery of type has been the idustry standard dummy text of the printing and typesetting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // \App\Models\User::factory(10)->create();
    }
}

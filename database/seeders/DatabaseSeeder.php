<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $user1 = User::factory()->create([
            'name' => 'Ace'
        ]);

        $user2 = User::factory()->create([
            'name' => 'Bebe'
        ]);

        $category1 = Category::factory()->create([
            'name' => 'Personal'
        ]);

        $category2 = Category::factory()->create([
            'name' => 'Work'
        ]);

        Post::factory(10)->create([
            'user_id' => $user1->id,
            'category_id' => $category1->id
        ]);

        Post::factory(5)->create([
            'user_id' => $user2->id,
            'category_id' => $category2->id
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::factory(3)->create();

        // User::truncate();
        // Category::truncate();
        // Post::truncate();

        // $user = User::factory()->create();

        // // adding categories

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal',
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family',
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work',
        // ]);

        // adding posts

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-family-post',
        //     'excerpt' => 'Our holiday trip',
        //     'body' => 'This is the story of our holiday....'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => 'Our work event',
        //     'body' => 'This is the story of our working life....'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $personal->id,
        //     'title' => 'My Personal Post',
        //     'slug' => 'my-personal-post',
        //     'excerpt' => 'Our personal event',
        //     'body' => 'This is the story of our personal life....'
        // ]);
    }
}

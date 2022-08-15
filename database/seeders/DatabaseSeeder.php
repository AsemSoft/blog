<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
//        User::truncate();
//        Category::truncate();
//        Post::truncate();

//        $user = User::factory()->create();

        Post::factory(30)->create();

//        $personal = Category::create([
//            'name' => 'personal',
//            'slug' => 'personal',
//        ]);
//        $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family',
//        ]);
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work',
//        ]);
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $personal->id,
//            'title' => 'Personal Post',
//            'slug' => 'Personal-post',
//            'body' => 'This is a personal post',
//            'excerpt' => 'This is a personal post',
//        ]);
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'title' => 'family Post',
//            'slug' => 'family-post',
//            'body' => 'This is a family post',
//            'excerpt' => 'This is a family post',
//        ]);
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'slug' => 'Work-post',
//            'title' => 'Work Post',
//            'body' => 'This is a work post',
//            'excerpt' => 'This is a work post',
//        ]);

//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => 'test@example.com',
//         ]);
    }
}

<?php

namespace Database\Seeders;

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

        User::truncate();
        Post::truncate();
        Category::truncate();

        $users = User::factory(6)->create();

        $categories = Category::factory(8)->create();

        for ($i = 0; $i < 12; $i++) {
            Post::factory()->create(['user_id' => $users->random()->id, 'category_id' => $categories->random()->id]);
        }
    }
}

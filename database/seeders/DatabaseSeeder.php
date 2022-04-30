<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Category::truncate();
        Post::truncate();
        Comment::truncate();
        Schema::enableForeignKeyConstraints();

        $users = User::factory(6)->create();

        $categories = Category::factory(8)->create();

        for ($i = 0; $i < 12; $i++) {
            Post::factory()->create(['user_id' => $users->random()->id, 'category_id' => $categories->random()->id]);
        }
    }
}

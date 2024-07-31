<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;  // Ensure this line is present

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::factory(10)->create();
    }
}

<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->generate_posts(50);
        $this->generate_categories(10);
    }

    private function generate_posts(int $int)
    {
        \App\Models\Post::truncate();
        factory(\App\Models\Post::class, $int)->create();
    }

    private function generate_categories(int $int)
    {
        \App\Models\Category::truncate();
        factory(\App\Models\Category::class, $int)->create();
    }
}

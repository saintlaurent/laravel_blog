<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class, 10)->create();
    }
}

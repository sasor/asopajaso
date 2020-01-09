<?php

use App\People;
use App\Article;
use App\Comment;
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
//        factory(People::class, 100)->create();
//        factory(Article::class, 200)->create();
//        factory(Comment::class, 500)->create();
        // $this->call(UsersTableSeeder::class);
        $this->call(AcmSeeder::class);
        $this->call(FileSeeder::class);
    }
}

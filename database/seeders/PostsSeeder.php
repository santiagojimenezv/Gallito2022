<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'content' => "Cualquier cosa #1",
            'user_id' => "1",
        ]);
        DB::table('posts')->insert([
            'content' => "Cualquier cosa #2",
            'user_id' => "1",
        ]);
        DB::table('posts')->insert([
            'content' => "Cualquier cosa #3",
            'user_id' => "1",
        ]);
        DB::table('posts')->insert([
            'content' => "Cualquier cosa #4",
            'user_id' => "2",
        ]);
        DB::table('posts')->insert([
            'content' => "Cualquier cosa #5",
            'user_id' => "2",
        ]);
    }
}
